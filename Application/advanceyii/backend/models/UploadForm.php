<?php 

namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $fileUpload;
	
	public $monthYear_id;

    public function rules()
    {
        return [
			[['fileUpload', 'monthYear_id'], 'required'],
            [['fileUpload'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xls, xlsx'],
			[['monthYear_id'], 'integer'],
        ];
    }
	
	public function attributeLabels()
    {
        return [
            'fileUpload' => 'File Upload',
            'monthYear_id' => 'Month-Year'
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->fileUpload->saveAs('uploads/' . $this->fileUpload->baseName . '.' . $this->fileUpload->extension);
            return true;
        } else {
            return false;
        }
    }
}