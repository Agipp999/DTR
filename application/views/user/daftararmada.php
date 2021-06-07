        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row"> 
                                    <?php
                                        foreach ($t_armada->result() as $u) {
                                        ?>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                    <a><?php echo $u->namaArmada;?></a>
                                    </div>
                                    <div class="product-image">
                                        <td><img width="100px" height="250px" src="<?= base_url('armada/' .$u->gambar) ?>"/></td>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-price">
                                    </div>
                                </div>
                            </div>                          
                            <?php } ?>
                            </div>
                    </div> 
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Info dan Pemesanan Lebih Lanjut</h1>
                    </div>
                    <div class="col-md-3">
                        <a href="https://api.whatsapp.com/send?phone=628125933984&text=Hallo%20Duta%20Ryana%20Trans%20?">08125933984</a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://api.whatsapp.com/send?phone=6282234201452&text=Hallo%20Duta%20Ryana%20Trans%20?">082234201452</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->  