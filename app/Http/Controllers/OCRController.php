<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use thiagoalessio\TesseractOCR\TesseractOCR;
use App\Models\OcrData;

class OCRController extends Controller
{
    public function ocrUpload(Request $request) {
        return view('ocr.upload');
    }

    public function store(Request $request)
    {
        $ocrdata = OcrData::create($request->all());

        return redirect()->route('policies')
            ->with('success', 'Talon adăugat cu succes');
    }

    public function ocr(Request $request)
    {
        // Validating the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Uploading the file
        $uploadedFile = $request->file('file');
        $filePath = str_replace('/public\p', '\p', (Storage::disk('public')->path($uploadedFile->store('public'))));

        // Preprocessing the image
        $image = Image::make($filePath)->brightness(20)->contrast(30)->sharpen(0)->contrast(50);
        // Only to debug the output image
        //return response($image->encode('png'))->header('Content-Type', 'image/png');

        // Saving the preprocessed image to temporary file
        $tempFilePath = sys_get_temp_dir() . '/' . uniqid() . '.png';
        $image->save($tempFilePath);

        // Performing slicing the image in 2 sections
        $sliceimg = imagecreatefrompng($tempFilePath);
        $slice1 = imagecrop($sliceimg, ['x' => 0, 'y' => 0, 'width' => imagesx($sliceimg)/2, 'height' => imagesy($sliceimg)]);
        $slice2 = imagecrop($sliceimg, ['x' => imagesx($sliceimg)/2, 'y' => 0, 'width' => imagesx($sliceimg)/2, 'height' => imagesy($sliceimg)]);
        imagepng($slice1, 'slices/slice1.png');
        imagepng($slice2, 'slices/slice2.png');

        // Performing OCR on the temporary file
        $result = ((new TesseractOCR(public_path("slices/slice1.png")))->lang('ron'))->psm(1)->oem(1)->run();
        $result2 = ((new TesseractOCR(public_path("slices/slice2.png")))->lang('ron'))->psm(1)->oem(1)->run();

        // Extracting relevant data from OCR result
        // You can use regular expressions or other methods to extract data
        $OCRRes = nl2br($result);
        $OCRRes2 = nl2br($result2);

        $OCR_Data = explode("\n", str_replace("\n\n", "\n", $result));
        $search = ['A', 'J', ['D.1', 'D1', 'D!'], ['D.3', 'D3'], 'E',
            ['C.2.1', 'C21', 'C2.1', 'C.21'], ['C.2.2', 'C22', 'C2.2', 'C.22'],
            ['C.2.3', 'C23', 'C2.3', 'C.23'], ['C.3.1', 'C31', 'C3.1', 'C.31', 'c1-3-1'],
            ['C.3.3', 'C33', 'C3.3', 'C.33', '0.3.3']
        ];

        $foundRow = [];
        $i = 0;
        $cursor = 0;  // This is our cursor for the first OCR_Data array
        while($i < count($search)) {
            $found = false;
            for ($cursor; $cursor < count($OCR_Data); $cursor++) {
                $row = $OCR_Data[$cursor];
                $currentSearch = $search[$i];
                if(is_array($currentSearch)) {
                    foreach($currentSearch as $searchItem) {
                        if(preg_match('/^' . preg_quote($searchItem, '/') . '/', $row)) {
                            array_push($foundRow, $row);
                            $found = true;
                            break;
                        }
                    }
                } else {
                    if(preg_match('/^' . preg_quote($currentSearch, '/') . '/', $row)) {
                        array_push($foundRow, $row);
                        $found = true;
                    }
                }
                if($found) break;
            }
            if(!$found){
                $foundRow[] = null;  // add null if string not found
            }
            $i++;
        }

        $OCR_Data2 = explode("\n", str_replace("\n\n", "\n", $result2));

        $search2 = [
            'B',
            ['F.1', 'F1', 'F'],
            ['P.1', 'P1'],
            ['P.2', 'P2'],
            ['P.3', 'P3'],
            ['S.1', 'S1'],
            'Y'
        ];

        $foundRow2 = [];
        $j = 0;
        $cursor2 = 0;  // This is our cursor for the second OCR_Data array

        while($j < count($search2)) {
            $found2 = false;
            for ($cursor2; $cursor2 < count($OCR_Data2); $cursor2++) {
                $row2 = $OCR_Data2[$cursor2];
                $currentSearch2 = $search2[$j];
                if(is_array($currentSearch2)) {
                    foreach($currentSearch2 as $searchItem2) {
                        if(preg_match('/^' . preg_quote($searchItem2, '/') . '/', $row2)) {
                            array_push($foundRow2, $row2);
                            $found2 = true;
                            break;
                        }
                    }
                } else {
                    if(preg_match('/^' . preg_quote($currentSearch2, '/') . '/', $row2)) {
                        array_push($foundRow2, $row2);
                        $found2 = true;
                    }
                }
                if($found2) break;
            }
            if(!$found2){
                $foundRow2[] = null;  // add null if string not found
            }
            $j++;
        }

        unlink($tempFilePath);

        // Only to debug the output image or scanned text
        //dd(str_replace("/n", "", $result));
        //return response($image->encode('png'))->header('Content-Type', 'image/png');

        // Return the extracted data to the OCR page
        return view('ocr.result', [
            'licensePlateNumber' => isset($foundRow[0]) ? str_replace("_", "", substr($foundRow[0], 2)) : null,
            'vehicleType' => isset($foundRow[1]) ? str_replace("_", "", substr($foundRow[1], 2)) : null,
            'vehicleMake' => isset($foundRow[2]) ? str_replace("_", "", substr($foundRow[2], 2)) : null,
            'vehicleModel' => isset($foundRow[3]) ? str_replace("_", "", substr($foundRow[3], 2)) : null,
            'vinSeries' => isset($foundRow[4]) ? str_replace("_", "", substr($foundRow[4], 0)) : null,
            'lastName' => isset($foundRow[5]) ? str_replace("_", "", substr($foundRow[5], 2)) : null,
            'firstName' => isset($foundRow[6]) ? str_replace("_", "", substr($foundRow[6], 2)) : null,
            'ownerAddress' => isset($foundRow[7]) ? str_replace("_", "", substr($foundRow[7], 2)) : null,
            'lastName2' => isset($foundRow[8]) ? str_replace("_", "", substr($foundRow[8], 2)) : null,
            'firstName2' => isset($foundRow[9]) ? str_replace("_", "", substr($foundRow[9], 2)) : null,
            'ownerAddress2' => isset($foundRow[10]) ? str_replace("_", "", substr($foundRow[10], 4)) : null,

            // OCR_Data2 results
            'firstRegistration' => isset($foundRow2[0]) ? str_replace("_", "", substr($foundRow2[0], 2)) : null,
            'maximumMass' => isset($foundRow2[1]) ? str_replace("_", "", substr($foundRow2[1], 2)) : null,
            'cylinderCapacity' => isset($foundRow2[2]) ? str_replace("_", "", substr($foundRow2[2], 2)) : null,
            'kilowatts' => isset($foundRow2[3]) ? str_replace("_", "", substr($foundRow2[3], 2)) : null,
            'combustible' => isset($foundRow2[4]) ? str_replace("_", "", substr($foundRow2[4], 2)) : null,
            'numberSeats' => isset($foundRow2[5]) ? str_replace("_", "", substr($foundRow2[5], 2)) : null,
            'registrationSeries' => isset($foundRow2[6]) ? str_replace("_", "", substr($foundRow2[6], 2)) : null,
            'OCR_Data' => $OCRRes,
            'OCR_Data2' => $OCRRes2
        ]);
    }
}
