<?
namespace app\assets;

use yii\web\AssetBundle;

class CustomFontAsset extends AssetBundle
{
  
    public $css = [
     'css/custom-font.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // здесь вы также можете указать зависимости, если они есть
    ];
}

?>