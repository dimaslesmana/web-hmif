<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class MultipleImageUpload extends BaseController
{
    use ResponseTrait;

    private $imageUploadRules = [
        'event_photo_file[]' => [
            'rules' => 'max_size[event_photo_file,3072]|is_image[event_photo_file]|mime_in[event_photo_file,image/png,image/jpg,image/jpeg]',
            'errors' => [
                'max_size' => 'Image size is too large. Max 3 MB',
                'is_image' => 'Please choose an image',
                'mime_in' => 'Please choose an image',
            ]
        ],
    ];

    public function upload()
    {
        if (!$this->validate($this->imageUploadRules)) {
            $errorMessage = $this->validation->getError('event_photo_file[]');

            return $this->setResponseFormat('json')->fail($errorMessage);
        }

        if ($imageFile = $this->request->getFiles()) {
            foreach ($imageFile['event_photo_file'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $originalImageName = $image->getClientName();
                    $randomImageName = $image->getRandomName();
                    $image->move('assets/images/event-news', $randomImageName);
                }
            }
        }

        $data = [
            'original_filename' => $originalImageName,
            'uploaded_filename' => $randomImageName,
        ];

        return $this->setResponseFormat('json')->respondCreated($data);
    }

    public function delete($fileId = null)
    {
        if (empty($fileId)) {
            return $this->setResponseFormat('json')->fail('File ID cannot be empty');
        }

        unlink('assets/images/event-news/' . $fileId);

        $data = [
            'message' => "$fileId deleted",
        ];

        return $this->setResponseFormat('json')->respondDeleted($data);
    }
}
