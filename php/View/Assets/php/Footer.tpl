<!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.php"><img id="logo-footer" class="footer-logo" src="view/images/logo_white.png" alt="" width="80"></a>
           <p> Geluk komt in beweging<br />
			Vreemden worden vrienden <br />
			Er komt geen geld aan te pas <br />
			Eigenwaarde groeit <br />
			Kennis en wijsheid worden gedeeld <br />
			Eenzaamheid vermindert <br />
			Oordeel vermindert <br />
			Liefdevolle aarde<br />
			Meer plezier in het leven<br /> </p>  
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Laatste nieuws</h2></div>
                            <ul class="list-unstyled latest-list">
                            {foreach from=$newsItems item=newsItem}
                                <li>
                                    <a href="index.php?controller=newsItem&action=News&id={$newsItem->nieuwsitemid}">{$newsItem->titel}</a>
                                    <small>{$newsItem->datum}</small>
                                </li>		  
							{/foreach}
                            </ul>
                        </div>
                    </div><!--/col-md-3-->  
                    <!-- End Latest --> 
                    
                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Handige links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="index.php?controller=about&action=index">Over ons</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="index.php?controller=news&action=index">Nieuws</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="index.php?controller=regulations&action=index">Regels</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="index.php?controller=faq&action=index">veelgestelde vragen</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Neem contact op</h2></div>                         
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            Vught <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->