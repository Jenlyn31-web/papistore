<!DOCTYPE html>
<html>
<head>
    <title>Shop now</title>
<style>
body {
        background-image: url('dogb.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
    }
    .menu-icon {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1000;
            transition: opacity 0.3s;
        }
        .menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            overflow-y: auto;
        }
        .menu a {
            display: block;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .menu a:hover {
            background-color: orange;
        }
        .closebtn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
        .products {
            margin-top: 40px;
        }
.products h1{
    text-align: center;
}

.product-grid {
    display: flex;
    justify-content: center;
    gap: 10px; /* Less gap between product cards */
    flex-wrap: wrap; /* Allow wrapping to fit smaller screens */
}
.product-card {
    background: linear-gradient(to bottom, #a1c4fd, #c2e9fb);
    padding: 15px; /* Smaller padding for compact style */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 180px; /* Smaller width for compact look */
    height: 295px; /* Adjust height */
    text-align: center;
}
.product-card img {
    width: 150px; /* Fixed width */
    height: 160px; /* Fixed height */
    object-fit: cover; /* Ensures the image scales to fill the dimensions without distortion */
    border-radius: 8px;
}
.product-card h3 {
    font-size: 16px; /* Smaller font size for compact look */
    margin: 8px 0;
}
.product-card p {
    color: black;
    font-weight: bold;
    font-size: 14px; /* Smaller font size */
    margin: 5px 0;
}
.product-card button {
    width: 60%; /* Adjust button width */
    padding: 8px;
    border: none;
    border-radius: 5px;
    background-color: #5992d9;
    color: #fff;
    cursor: pointer;
    font-size: 14px; /* Smaller font size for compact style */
    transition: 0.3s;
}
.product-card button:hover {
    background-color: #fff;
    color: #5992d9;
    border: 2px solid #5992d9;
}
.our-products-title {
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: black;
            font-size: 1.8rem;
            font-weight: bold;
            z-index: 1000;
        }
</style>
</head>
<body>
<div class="menu-icon">&#9776;</div>
    <div class="our-products-title">Cat Products</div>
    <div class="menu">
        <span class="closebtn">&times;</span>
        <a href="http://localhost/online-products/index.html">Home</a>
        <a href="http://localhost/online-products/shopnow/shop.php">Shop Now</a>
        <a href="http://localhost/online-products/faqs/faqs.html">FAQs</a>
        <a href="http://localhost/online-products/Contact-info/contact.html">Contact Us</a>
        <a href="http://localhost/online-products/image-products/dogfood.php">Dog Food Products</a>
        <a href="">Cat Food Products</a>
        <a href="http://localhost/online-products/image-products/petsupplies.php">Pet Supplies Products</a>
        <a href="http://localhost/online-products/image-products/sellerfood.php">Best Seller Products</a>
    </div>
<section class="products">
    <div class="product-grid">
        <div class="product-card">
        <img src="aro.png" alt="Dog Food"> 
        <h3>10L Aromatic Cat litter Sand Bentonite for Cat poop</h3>
        <p>₱279.00</p>
        <a href="https://shopee.ph/Aromatic-Cat-litter-Sand-Bentonite-for-cat-poop-deodorizer-i.270540114.28564086391?sp_atk=e6a2a979-641c-45e8-9436-e7fed5721761"> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="whis.jpg" alt="Dog Food"> 
        <h3>Whiskas</h3><br>
        <p>₱53.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="pow.jpg" alt="Dog Food"> 
        <h3>Power cat - halal organic fresh cat food</h3>
        <p>₱1,765.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="powkit.jpg" alt="Dog Food"> 
        <h3>Power Cat - Kitten formula</h3>
        <p>₱188.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="spe.jpg" alt="Dog Food"> 
        <h3>Special cat - Chicken & Turkey</h3>
        <p>₱285.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="luc.jpg" alt="Dog Food"> 
        <h3>Lucy 26 - Tuna Flavor adult cat food</h3>
        <p>₱100.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="luctu.jpg" alt="Dog Food"> 
        <h3>Lucy - Tuna Flavor</h3>
        <p>₱69.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="ao.jpg" alt="Dog Food"> 
        <h3>Aozi Cat</h3>
        <p>₱182.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="min.jpg" alt="Dog Food"> 
        <h3>Minino - kitten and adult cat</h3>
        <p>₱130.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="prin.jpg" alt="Dog Food"> 
        <h3>Princess cat food</h3>
        <p>₱158.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cut.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Tuna flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cuts.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Tuna and Shrimp flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cutss.jpg" alt="Dog Food"> 
        <h3>Cuties Cats - Salmon flavored</h3>
        <p>₱66.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="zoii.jpg" alt="Dog Food"> 
        <h3>Zoi Cat - Tuna Flavor</h3>
        <p>₱115.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="infi.jpg" alt="Dog Food"> 
        <h3>Infinity Cat food - Salmon all breed adult</h3>
        <p>₱58.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="repack.png" alt="Dog Food"> 
        <h3>7kg Repacked Pro's Choice Cat Food</h3>
        <p>₱1,250.00</p>
        <a href="https://www.lazada.com.ph/products/7kg-repacked-pros-choice-cat-food-all-stages-for-adult-and-kitten-high-digestion-i4514758785-s26371555110.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4514758785%253Bsrc%253AlazadaInShopSrp%253Brn%253A87ee60766aa7c32a1bc7ce07b758c627%253Bregion%253Aph%253Bsku%253A4514758785_PH%253Bprice%253A1250%253Bclient%253Adesktop%253Bsupplier_id%253A500525824804%253Bbiz_source%253Ah5_internal%253Bslot%253A8%253Butlog_bucket_id%253A470687%253Basc_category_id%253A21966%253Bitem_id%253A4514758785%253Bsku_id%253A26371555110%253Bshop_id%253A4624321%253BtemplateInfo%253A107881_D_E%2523-1_A3_C%2523120442_A0%2523&freeshipping=1&fs_ab=2&fuse_fs=&lang=en&location=Bulacan&price=1.25E%203&priceCompare=skuId%3A26371555110%3Bsource%3Alazada-search-voucher-in-shop%3Bsn%3A87ee60766aa7c32a1bc7ce07b758c627%3BoriginPrice%3A125000%3BdisplayPrice%3A125000%3BsinglePromotionId%3A-1%3BsingleToolCode%3A-1%3BvoucherPricePlugin%3A0%3Btimestamp%3A1731989208687&ratingscore=3.4&request_id=87ee60766aa7c32a1bc7ce07b758c627&review=5&sale=14&search=1&spm=a2o4l.store_product.list.8&stock=1"> 
            <button>Click here</button>
            </a>
        </div>
        </div>
</section>

<script>
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('.menu');
        const closeBtn = document.querySelector('.closebtn');

        menuIcon.addEventListener('click', () => {
            menu.style.display = 'block';
            menuIcon.style.opacity = 0;
        });

        closeBtn.addEventListener('click', () => {
            menu.style.display = 'none';
            menuIcon.style.opacity = 1;
        });
    </script>
</body>
</html>