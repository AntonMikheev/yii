<?php /* @var $this ReviewsController */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
        <div class="column span-20">
            <article class="box">
                <div class="buttons">
                    <a href="http://yiitest/index.php?r=reviews/delreviews&id=<?php echo $data['id']; ?>" >Delete</a><br>
                    <a href="http://yiitest/index.php?r=reviews/editreview&id=<?php echo $data['id']; ?>" >Edit</a><br>
                    <a href="http://yiitest/index.php?r=reviews/allreviews" >Back to all</a>
                </div>
                <table border="3px" width="800px" bgcolor="#E6E6FA" align="center">
                    <tr><td>Reviews ID</td><td><?php echo $data['id'] ?></td></tr>
                    <tr><td>Reviews heading ID</td><td><?php echo $data['heading_id'] ?></td></tr>
                    <tr><td>Reviews name</td><td><?php echo $data['name'] ?></td></tr>
                    <tr><td>Reviews text</td><td><?php echo $data['text'] ?></td></tr>
                    <tr><td>Reviews author</td><td><?php echo $data['author'] ?></td></tr>
                </table>
                </br>
            </article>
        </div>
</div>
</body>
</html>
