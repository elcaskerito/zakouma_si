<div class="tof">
                                <!-- <img src="model/img1.php?id=s" alt="image des animaux" width="200px" height="300px"> -->
                                        <?php
                                        while($data=$seImg->fetch())
                                                {?>
                                                <img src="<?=$data['lien']?>" alt="image des animaux" width="200px" height="230px">
                                            <br>
                                            <?php

                                                }
                                               
                                        ?>
                            </div>s