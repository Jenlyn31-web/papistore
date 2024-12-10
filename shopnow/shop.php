<!DOCTYPE html>
<html>
<head>
    <title>Shop now</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
  body {
        background-image: url('shopb.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
    }
    .navbar {
        width: 100%;
        background-color: #333;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        z-index: 1000;
    }

    .navbar-links {
        display: flex;
        gap: 50px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
    }

    .navbar a.active {
    color: #a1c4fd; 
    }
    .navbar a:hover {
    color: #a1c4fd; 
}

.search-container {
    display: flex;
    align-items: flex-start; 
    justify-content: flex-start; 
    width: 20%; 
    padding: 3px; 
    box-sizing: border-box; 
    margin-left: 500px;
}
.search-container input {
    flex-grow: 1;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}
.search-container button:hover {
    background-color: #45a049; 
}

  
.products h1{
    text-align: center;
    margin-top: 50px;
}

.product-grid {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap; 
}
.product-card {
    background: linear-gradient(to bottom, #a1c4fd, #c2e9fb);
    padding: 15px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 180px; 
    height: 295px; 
    text-align: center;
}
.product-card img {
    width: 150px; 
    height: 175px; 
    object-fit: cover; 
    border-radius: 8px;
}
.product-card h3 {
    font-size: 16px; 
    margin: 8px 0;
}
.product-card p {
    color: black;
    font-weight: bold;
    font-size: 14px; 
    margin: 5px 0;
}
.product-card button {
    width: 60%; 
    padding: 8px;
    border: none;
    border-radius: 5px;
    background-color: #5992d9;
    color: #fff;
    cursor: pointer;
    font-size: 14px; 
    transition: 0.3s;
}
.product-card button:hover {
    background-color: #fff;
    color: #5992d9;
    border: 2px solid #5992d9;
}
.admin-actions {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin: 20px auto;
}

.admin-actions button {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #5992d9;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.admin-actions button:hover {
    background-color: #4a81c5;
}

</style>
</head>
<body>
<div class="navbar">
    <div class="navbar-links">
        <a href="http://localhost/online-products/index.html">Home</a>
        <a href="#" class="active">Shop Now</a>
        <a href="http://localhost/online-products/faqs/faqs.html">FAQs</a>
        <a href="http://localhost/online-products/Contact-info/contact.html">Contact Us</a>
    </div>
    <div class="search-container">
        <input type="text" id="searchBar" placeholder="Search products..." onkeyup="searchProducts()">
    </div>
</div>
<script>
    function searchProducts() {
        let input = document.getElementById('searchBar').value.toLowerCase();
        let cards = document.querySelectorAll('.product-card');
        cards.forEach(card => {
            let productName = card.querySelector('h3').innerText.toLowerCase();
            card.style.display = productName.includes(input) ? 'block' : 'none';
        });
    }
</script>


<section class="products">
    <h1>Our Products</h1>
    <div class="product-grid">
        <div class="product-card">
        <img src="aromatic.png" alt="Dog Food"> 
        <h3>10L Aromatic Cat litter Sand Bentonite for Cat poop</h3>
        <p>₱279.00</p>
        <a href="https://shopee.ph/Aromatic-Cat-litter-Sand-Bentonite-for-cat-poop-deodorizer-i.270540114.28564086391?sp_atk=e6a2a979-641c-45e8-9436-e7fed5721761"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 114822.png" alt="Dog Food"> 
        <h3>1kg Zoi Dog Food for adult<br><br></h3>
        <p>₱135.00</p>
        <a href="https://www.lazada.com.ph/products/1kg-zoi-dog-food-for-adult-i4525286155-s26371535658.html?spm=a2o4l.10450891.0.0.2d732d8cIWfDD3&priceCompare=skuId%3A26371535658%3Bsource%3Alzd-shop-center%3Bsn%3A02b1310c8970a12b3bfea18500e4c6a0%3BunionTrace%3A2151e1cf17300437911021005e5746%3BoriginPrice%3A13500%3BvoucherPrice%3A13500%3BdisplayPrice%3A13500%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A1%3BbuyerId%3A0%3Btimestamp%3A1730043791156&search=store&mp=3"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 114643.png" alt="Dog Food">  
        <h3>Pet med Co Amoxiclav Suspension for Cat and Dog Cough and Colds</h3>
        <p>₱350.00</p>
        <a href="https://shopee.ph/Co-amoxiclav-for-cats-and-dogs-cough-and-colds-i.270540114.27763804412"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="300g Pro's Choice Cat food Safe for cats with history of UTI mini pack.png" alt="Dog Food"> 
        <h3>300g Pro's Choice Cat food Safe for cats with history of UTI mini pack</h3>
        <p>₱60.00</p>
        <a href="https://shopee.ph/300g-Pro's-Choice-Cat-food-Safe-for-cats-with-history-of-UTI-mini-pack-i.270540114.26666756648?sp_atk=bddff6ae-a5b2-43a8-b27f-49e846afefb1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="30pcs Malunggay Capsule for cats and dogs (Moringa) moringa vita.png" alt="Dog Food"> 
        <h3>30pcs Malunggay Capsule for cats and dogs (Moringa) moringa vita</h3>
        <p>₱5.00</p>
        <a href="https://shopee.ph/30pcs-Malunggay-Capsule-for-cats-and-dogs-(Moringa)-moringa-vita-i.270540114.27614704925"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 115056.png" alt="Dog Food"> 
        <h3>Povidone Iodine skin cleanser small para sa sugat Treatment</h3>
        <p>₱80.00</p>
        <a href="https://shopee.ph/Povidone-Iodine-skin-cleanser-small-para-sa-sugat-Treatment-i.270540114.26514923867"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 115305.png" alt="Dog Food"> 
        <h3>Metronidazole suspension for cats and dogs <br><br></h3>
        <p>₱110.00</p>
        <a href="https://shopee.ph/Metronidazole-suspension-for-cats-and-dogs-anti-diarrheal-disorder-Healthcare-i.270540114.28963804958"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 115840.png" alt="Dog Food"> 
        <h3>10pcs Sambong Tablet 500mg <br><br></h3>
        <p>₱100.00</p>
        <a href="https://shopee.ph/10pcs-Sambong-Tablet-500mg-recommended-to-use-for-adult-Fitness-Supplement-Edible-Healthcare-Dietary-i.270540114.29265382993"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 120403.png" alt="Dog Food"> 
        <h3>10pcs each (Vitamin E Tanyan E) D Alpha tocopherrol</h3>
        <p>₱100.00</p>
        <a href="https://shopee.ph/10pcs-each-(Vitamin-E-Tanyan-E)-D-Alpha-tocopherrol-to-look-fresh-and-younger-Supplement-skin-care-o-i.270540114.26315390006?sp_atk=3bde05d6-a66d-42c1-8b5b-4272afa83c7b"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 120748.png" alt="Dog Food"> 
        <h3>Hexamide Cream Disinfectant and Antiseptic</h3>
        <p>₱120.00</p>
        <a href="https://www.lazada.com.ph/products/hexamide-cream-disinfectant-and-antiseptic-para-sa-mga-kati-kati-at-skin-allergt-ng-dogs-and-cat-i4582486402-s26371463125.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4582486402%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4582486402_PH%253Bprice%253A120%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A470687%253Basc_category_id%253A24326%253Bitem_id%253A4582486402%253Bsku_id%253A26371463125%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_D_E%2523-1_A3_C%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=1.2E%202&priceCompare=skuId%3A26371463125%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A12000%3BdisplayPrice%3A12000%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=&sale=0&search=1&spm=a2o4l.store_product.list.0&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 121204.png" alt="Dog Food"> 
        <h3>7kg Repacked Pro's Choice Cat Food<br><br></h3>
        <p>₱1,250.00</p>
        <a href="https://www.lazada.com.ph/products/7kg-repacked-pros-choice-cat-food-all-stages-for-adult-and-kitten-high-digestion-i4514758785-s26371555110.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4514758785%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4514758785_PH%253Bprice%253A1250%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A8%253Butlog_bucket_id%253A470687%253Basc_category_id%253A21966%253Bitem_id%253A4514758785%253Bsku_id%253A26371555110%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_D_E%2523-1_A3_C%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=1.25E%203&priceCompare=skuId%3A26371555110%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A125000%3BdisplayPrice%3A125000%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=3.4&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=5&sale=14&search=1&spm=a2o4l.store_product.list.8&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 121537.png" alt="Dog Food"> 
        <h3>30pcs Vitamin C Non Acidic Sodium Ascorbate with Zinc</h3>
        <p>₱105.00</p>
        <a href="https://www.lazada.com.ph/products/30pcs-vitamin-c-non-acidic-sodium-ascorbate-with-zinc-i4670584240-s26919823284.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4670584240%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4670584240_PH%253Bprice%253A105%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A4%253Butlog_bucket_id%253A470687%253Basc_category_id%253A9395%253Bitem_id%253A4670584240%253Bsku_id%253A26919823284%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_A3%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=105&priceCompare=skuId%3A26919823284%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A10500%3BdisplayPrice%3A10500%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=&sale=0&search=1&spm=a2o4l.store_product.list.4&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 121819.png" alt="Dog Food"> 
        <h3>30pcs Eurivit tablet Multivitamins + Minerals Anti-stress</h3>
        <p>₱150.00</p>
        <a href="https://www.lazada.com.ph/products/30pcs-eurivit-tablet-multivitamins-minerals-anti-stress-i4663811841-s26875813415.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4663811841%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4663811841_PH%253Bprice%253A150%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A5%253Butlog_bucket_id%253A470687%253Basc_category_id%253A13138%253Bitem_id%253A4663811841%253Bsku_id%253A26875813415%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_D_E%2523-1_A3_C%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=1.5E%202&priceCompare=skuId%3A26875813415%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A15000%3BdisplayPrice%3A15000%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=&sale=0&search=1&spm=a2o4l.store_product.list.5&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Screenshot 2024-11-19 122028.png" alt="Dog Food"> 
        <h3>Mupirocin Ointment 5grams for cuts and wounds</h3>
        <p>₱250.00</p>
        <a href="https://www.lazada.com.ph/products/mupirocin-ointment-5grams-for-cuts-and-wounds-i4579915217-s26356505757.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4579915217%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4579915217_PH%253Bprice%253A250%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A11%253Butlog_bucket_id%253A470687%253Basc_category_id%253A24128%253Bitem_id%253A4579915217%253Bsku_id%253A26356505757%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_D_E%2523-1_A3_C%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=2.5E%202&priceCompare=skuId%3A26356505757%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A25000%3BdisplayPrice%3A25000%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=&sale=1&search=1&spm=a2o4l.store_product.list.11&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aromatic.png"> 
        <h3>10L Aromatic Cat litter Sand Bentonite for Cat poop</h3>
        <p>₱259.00</p>
        <a href="https://www.lazada.com.ph/products/10l-aromatic-cat-litter-sand-bentonite-for-cat-poop-i4514595473-s25834414966.html?spm=a2o4l.10450891.0.0.2d732d8cVecZI4&priceCompare=skuId%3A25834414966%3Bsource%3Alzd-shop-center%3Bsn%3Aef780363ef1f00de7bd3314a30ab0cd2%3BunionTrace%3A213ba0c417299250389463666ebc58%3BoriginPrice%3A25900%3BvoucherPrice%3A25900%3BdisplayPrice%3A25900%3BsinglePromotionId%3A-1%3BsingleToolCode%3AmockedSalePrice%3BvoucherPricePlugin%3A1%3BbuyerId%3A0%3Btimestamp%3A1729925039058&search=store"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Nutrena Pigeon.jpg" alt="Dog Food"> 
        <h3>Nutrena Pigeon</h3><br>
        <p>₱1,285.00</p>
        <a href="https://shopee.ph/NUTRENA-PIGEON-FLYER-MIX-25kg-Feeds-For-Pigeon-25-kg-petpoultryph-i.546004724.10961959803?sp_atk=6962c471-0480-449c-be5f-01d098d72344&xptdk=6962c471-0480-449c-be5f-01d098d72344"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="whiskas.jpg" alt="Dog Food"> 
        <h3>Whiskas</h3><br>
        <p>₱53.00</p>
        <a href="https://shopee.ph/Whiskas-Pouch-85g-For-2-12month-(Junior)-Cat-Wet-Food-sold-per-pack-petpoultryph-i.546004724.12424388724?sp_atk=8731a234-cf59-4567-8735-1cc19c895bf3&xptdk=8731a234-cf59-4567-8735-1cc19c895bf3"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="powercat.jpg" alt="Dog Food"> 
        <h3>Power cat - Halal organic-fresh cat food</h3>
        <p>₱1,765.00</p>
        <a href="https://shopee.ph/Powercat-Fresh-Ocean-Tuna-8kg-Halal-Organic-Fresh-Cat-Food-For-Adult-Cats-Dry-Food-i.546004724.11658393788?sp_atk=b2f264d5-a9f1-48d9-8c6c-e38fce571a9d&xptdk=b2f264d5-a9f1-48d9-8c6c-e38fce571a9d"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="power2.jpg" alt="Dog Food"> 
        <h3>Power cat-Kitten formula</h3><br>
        <p>₱188.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="special cat.jpg" alt="Dog Food"> 
        <h3>Special cat - Chicken & Turkey</h3>
        <p>₱285.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="tuna.jpg" alt="Dog Food"> 
        <h3>Lucy 26 - Tuna Flavor adult cat food</h3>
        <p>₱100.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lucy.jpg" alt="Dog Food"> 
        <h3>Lucy - Tuna Flavor</h3><br>
        <p>₱69.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aozi.jpg" alt="Dog Food"> 
        <h3>Aozi Cat</h3><br>
        <p>₱182.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="minino.jpg" alt="Dog Food"> 
        <h3>Minino - kitten and adult cat</h3>
        <p>₱130.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cess.jpg" alt="Dog Food"> 
        <h3>Princess cat food - 1kg</h3><br>
        <p>₱158.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cuties.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Tuna flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="catz.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Tuna and Shrimp flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="salmon.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Salmon flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="zoi.jpg" alt="Dog Food"> 
        <h3>Zoi Cat - Tuna Flavor</h3><br>
        <p>₱115.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="infinity.jpg" alt="Dog Food"> 
        <h3>Infinity Cat food - Salmon all breed adult</h3>
        <p>₱58.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="beef.jpg" alt="Dog Food"> 
        <h3>Beef Terriyaki - Dog food</h3><br>
        <p>₱85.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="whoopy.jpg" alt="Dog Food"> 
        <h3>Whooppy - Dog food all breed</h3>
        <p>₱73.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="spe.jpg" alt="Dog Food"> 
        <h3>Special Dog - specialty lamb and rice for Adult</h3>
        <p>₱135.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="puppy.jpg" alt="Dog Food"> 
        <h3>Special Dog - specialty lamb and rice for Puppy</h3>
        <p>₱140.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="ped.jpg" alt="Dog Food"> 
        <h3>Pedigree - adult mini</h3>
        <p>₱170.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pedadult.jpg" alt="Dog Food"> 
        <h3>Pedigree - Adult</h3>
        <p>₱150.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pedpuppy.jpg" alt="Dog Food"> 
        <h3>Pedigree - Puppy</h3>
        <p>₱176.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aoziadult.jpg" alt="Dog Food"> 
        <h3>Aozi - Pure natural organic food for Adult</h3>
        <p>₱580.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="aozipup.jpg" alt="Dog Food"> 
        <h3>Aozi - for Puppy</h3>
        <p>₱600.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="Topbreedadult.jpg" alt="Dog Food"> 
        <h3>Top Breed - dog meal Adult - 1kg</h3>
        <p>₱89.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="toppuppy.jpg" alt="Dog Food"> 
        <h3>Top Breed - dog meal Puppy</h3>
        <p>₱270.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="triple.jpg" alt="Dog Food"> 
        <h3>Triple crown - Canary mix</h3>
        <p>₱1,820.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="triple2.jpg" alt="Dog Food"> 
        <h3>Triple crown - African mix</h3>
        <p>₱1,870.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="buena.jpg" alt="Dog Food"> 
        <h3>Buena Suerta Vortex - Repacked</h3>
        <p>₱45.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="gmp.jpg" alt="Dog Food"> 
        <h3>GMP - Maintenance</h3>
        <p>₱45.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lotus.jpg" alt="Dog Food"> 
        <h3>Lotus Brand - White Corn Grits</h3>
        <p>₱75.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="razor.jpg" alt="Dog Food"> 
        <h3>Razor - Choice of breeders</h3>
        <p>₱.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="integ.jpg" alt="Dog Food"> 
        <h3>B-Meg Integra 3000 plus+ 25kg repacked </h3>
        <p>₱45.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="integra.jpg" alt="Dog Food"> 
        <h3>B-Meg Integra 2500 25kg repacked </h3>
        <p>₱35.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="integ1.jpg" alt="Dog Food"> 
        <h3>B-Meg Integra - 2000</h3>
        <p>₱48.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="sisiw.jpg" alt="Dog Food"> 
        <h3>Inuman ng sisiw (small)</h3>
        <p>₱43.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="despenser.jpg" alt="Dog Food"> 
        <h3>Pet water dispenser</h3>
        <p>₱160.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="ped1.jpg" alt="Dog Food"> 
        <h3>Pedigree - Dentastix (toy dog)</h3>
        <p>₱81.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="daily.jpg" alt="Dog Food"> 
        <h3>Pedigree - Dentastix daily oral care</h3>
        <p>₱93.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bot.jpg" alt="Dog Food"> 
        <h3>Pet Bottle - feeding bottle</h3>
        <p>₱55.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="vit.jpg" alt="Dog Food"> 
        <h3>Vitminpro Sachet 20g</h3>
        <p>₱20.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="zero.jpg" alt="Dog Food"> 
        <h3>Zero Mite</h3>
        <p>₱18.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="premoxil.jpg" alt="Dog Food"> 
        <h3>Premoxil Sachet 5g </h3>
        <p>₱40.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="ambrox.jpg" alt="Dog Food"> 
        <h3>Ambroxitil Sachet 5g</h3>
        <p>₱35.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="iver.jpg" alt="Dog Food"> 
        <h3>Ivermectin (Agmectin)</h3>
        <p>₱29s.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="perme.jpg" alt="Dog Food"> 
        <h3>Permethrin - Wash Out </h3>
        <p>₱185.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="vetra.jpg" alt="Dog Food"> 
        <h3>Vetracin Sachet 5g</h3>
        <p>₱34.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="int.jpg" alt="Dog Food"> 
        <h3>Floating Pellet Big.  </h3>
        <p>₱149.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="munch.jpg" alt="Dog Food"> 
        <h3>Munch Treats Small</h3>
        <p>₱74.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="dental.jpg" alt="Dog Food"> 
        <h3>Dental Chew Choco Big</h3>
        <p>₱55.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="stix.jpg" alt="Dog Food"> 
        <h3>Dentastix 2-5kg (Toy Dog)</h3>
        <p>₱100.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="hams.jpg" alt="Dog Food"> 
        <h3>Hamster Bottle</h3>
        <p>₱249.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bott.jpg" alt="Dog Food"> 
        <h3>Pet Bottle - depends on size</h3>
        <p>₱50.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="knife.jpg" alt="Dog Food"> 
        <h3>Knife Strings</h3>
        <p>₱499.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="detik.jpg" alt="Dog Food"> 
        <h3>Detic 1cc</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="detikk.jpg" alt="Dog Food"> 
        <h3>Detic 2cc</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="treats.jpg" alt="Dog Food"> 
        <h3>Training Treats</h3>
        <p>₱45.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="jerhigh.jpg" alt="Dog Food"> 
        <h3>Jerhigh</h3>
        <p>₱50.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="ward.jpg" alt="Dog Food"> 
        <h3>Train & Rewards</h3>
        <p>₱45.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="goat.jpg" alt="Dog Food"> 
        <h3>Goats Milk small</h3>
        <p>₱90.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bayong.jpg" alt="Dog Food"> 
        <h3>Bayong</h3>
        <p>₱70.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="egg.jpg" alt="Dog Food"> 
        <h3>Itlugan</h3>
        <p>₱120.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="box.jpg" alt="Dog Food"> 
        <h3>Wood Cock Box </h3>
        <p>₱189.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="box2.jpg" alt="Dog Food"> 
        <h3>Plastic Cock Box Single</h3>
        <p>₱200.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="box3.jpg" alt="Dog Food"> 
        <h3>Plastic Cock Box Double</h3>
        <p>₱300.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bearing.jpg" alt="Dog Food"> 
        <h3>Bearing pink 150mL</h3>
        <p>₱120.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lori.jpg" alt="Dog Food"> 
        <h3>Lori soap (Guava & Banana)</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lori2.jpg" alt="Dog Food"> 
        <h3>Lori Herbal Mineral Red</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lori3.jpg" alt="Dog Food"> 
        <h3>Lori Amitraz Violet</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cacao.jpg" alt="Dog Food"> 
        <h3>Madre Cacao soap</h3>
        <p>₱125.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="hus.jpg" alt="Dog Food"> 
        <h3>Hus Cream</h3>
        <p>₱139.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="hexa.jpg" alt="Dog Food"> 
        <h3>Hexaminde Cream</h3>
        <p>₱300.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="gentin.jpg" alt="Dog Food"> 
        <h3>Gentamycin opthalmic</h3>
        <p>₱280.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="dextrose.jpg" alt="Dog Food"> 
        <h3>Dextrose Powder 300g</h3>
        <p>₱120.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="dextrose2.jpg" alt="Dog Food"> 
        <h3>Dextrose Powder 100g</h3>
        <p>₱85.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="nema.jpg" alt="Dog Food"> 
        <h3>Nematocide 60mL</h3>
        <p>₱60.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="nema2.jpg" alt="Dog Food"> 
        <h3>Nematocide 15ml</h3>
        <p>₱115.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="scour.jpg" alt="Dog Food"> 
        <h3>LC-Scour 60mL</h3>
        <p>₱225.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bron.jpg" alt="Dog Food"> 
        <h3>Broncure 60mL</h3>
        <p>₱250.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="enmalac.jpg" alt="Dog Food"> 
        <h3>Enmalac 120mL</h3>
        <p>₱180.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lcvit.jpg" alt="Dog Food"> 
        <h3>LC Vit Plus 120mL</h3>
        <p>₱156.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="nutri.jpg" alt="Dog Food"> 
        <h3>Nutrical 60mL</h3>
        <p>₱187.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="livotine.jpg" alt="Dog Food"> 
        <h3>Livotine 60mL</h3>
        <p>₱200.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="coat.jpg" alt="Dog Food"> 
        <h3>Coatshine 60mL</h3>
        <p>₱200.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="anthe.jpg" alt="Dog Food"> 
        <h3>Vermifuge 60mL</h3>
        <p>₱250.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bottle.jpg" alt="Dog Food"> 
        <h3>Feeding Bottle</h3>
        <p>₱159.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="tub.jpg" alt="Dog Food"> 
        <h3>Liter Box</h3>
        <p>₱190.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="succ.jpg" alt="Dog Food"> 
        <h3>Succesor Breeder Pellets</h3>
        <p>₱59.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="high.jpg" alt="Dog Food"> 
        <h3>Sagupaan High Action</h3>
        <p>₱65.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="thunderbird.jpg" alt="Dog Food"> 
        <h3>Enertone Bioplex</h3>
        <p>₱63.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="plat.jpg" alt="Dog Food"> 
        <h3>Platinum Power Pellet</h3>
        <p>₱69.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="stag.jpg" alt="Dog Food"> 
        <h3>Stag Developer </h3>
        <p>₱73.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="rang.jpg" alt="Dog Food"> 
        <h3>Stag Developer 4+</h3>
        <p>₱73.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="babystag.jpg" alt="Dog Food"> 
        <h3>BABY STAG BOOSTER</h3>
        <p>₱74.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="sisiw2.jpg" alt="Dog Food"> 
        <h3>Inuman ng sisiw / 45 days LARGE Size  </h3>
        <p>₱70.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bowl.jpg" alt="Dog Food"> 
        <h3>Bowl for cat and dog</h3>
        <p>₱50.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bowlchick.jpg" alt="Dog Food"> 
        <h3>CHICKEN BOWL RED </h3>
        <p>₱90.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bowlred.jpg" alt="Dog Food"> 
        <h3>CHICKEN BOWL RED</h3>
        <p>₱90.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="plastikbowl.jpg" alt="Dog Food"> 
        <h3>PLASTIC BOWL </h3>
        <p>₱30.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="white.jpg" alt="Dog Food"> 
        <h3>PLATSTIC BOX WHITE COLOR</h3>
        <p>₱99.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="blue.jpg" alt="Dog Food"> 
        <h3>PLASTIC BOX BLUE COLOR</h3>
        <p>₱85.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="rat.jpg" alt="Dog Food"> 
        <h3>Lason ng Daga (Zinc Phosphide)</h3>
        <p>₱130.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="selectrogen.jpg" alt="Dog Food"> 
        <h3>Selectrogen</h3>
        <p>₱25.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="electrogen.jpg" alt="Dog Food"> 
        <h3>Electrogen</h3>
        <p>₱25.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
    </div>
</section>
</body>
</html>
