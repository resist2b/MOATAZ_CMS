<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "header" );?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <?php if( $article==0 ){ ?>
                <p>Sorry,No Article Found</p>

                <?php }else{ ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1><?php echo $article["title"];?></h1>

                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            <p><?php echo $article["content"];?></p>
                            <div>
                                <span class="badge">Posted <?php echo $article["date"];?></span>
                                <div class="pull-right"><a href="http://localhost/AhmedSyamRouting/cats/show/<?php echo $value["cid"];?>/" target="_blank" ><span class="label label-warning"><?php echo $article["cname"];?></span></a> </div>         
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Comments</h1>

                    </div>
                    <div class="panel-body">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Moataz Mohammady</h4>

                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <p>goog Article </p>
                                    <div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Mohammed Mohammady</h4>

                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <p>Keep Going</p>
                                    <div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>






            </div>
        </div>

    </div>
    <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>