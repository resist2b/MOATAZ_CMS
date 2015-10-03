<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title;?></h2>
                <a href="http://localhost/AhmedSyamRouting/addArticle.php" class="btn btn-primary square-btn-adjust">Add Article</a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <?php if( $articles==0 ){ ?>
                <p>Sorry,No Articles</p>

                <?php }else{ ?>

                <?php $counter1=-1; if( isset($articles) && is_array($articles) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1><a href="http://localhost/AhmedSyamRouting/articles/show/<?php echo $value1["id"];?>/" ><?php echo $value1["title"];?></a></h1>

                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            <p><?php echo $value1["content"];?></p>
                            <div>
                                <span class="badge">Posted <?php echo $value1["date"];?></span>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php } ?>



            </div>
        </div>

    </div>
    <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>