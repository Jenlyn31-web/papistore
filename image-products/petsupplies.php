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
    <div class="our-products-title">Pet Supplies</div>
    <div class="menu">
        <span class="closebtn">&times;</span>
        <a href="http://localhost/online-products/index.html">Home</a>
        <a href="http://localhost/online-products/shopnow/shop.php">Shop Now</a>
        <a href="http://localhost/online-products/faqs/faqs.html">FAQs</a>
        <a href="http://localhost/online-products/Contact-info/contact.html">Contact Us</a>
        <a href="http://localhost/online-products/image-products/dogfood.php">Dog Food Products</a>
        <a href="http://localhost/online-products/image-products/catfood.php">Cat Food Products</a>
        <a href="#contact">Pet Supplies Products</a>
        <a href="http://localhost/online-products/image-products/sellerfood.php">Best Seller Products</a>
    </div>
<section class="products">
    <div class="product-grid">
        <div class="product-card">
        <img src="sisiw2.jpg" alt="Dog Food"> 
        <h3>Inuman ng sisiw (small)</h3>
        <p>₱43.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="dis.jpg" alt="Dog Food"> 
        <h3>Pet water dispenser</h3>
        <p>₱160.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bot2.jpg" alt="Dog Food"> 
        <h3>Pet Bottle - feeding bottle</h3>
        <p>₱55.00</p>
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
        <img src="bot3.jpg" alt="Dog Food"> 
        <h3>Pet Bottle - depends on size</h3>
        <p>₱50.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="gla.jpg" alt="Dog Food"> 
        <h3>Glabs for pet</h3>
        <p>₱.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="kni.jpg" alt="Dog Food"> 
        <h3>Knife Strings</h3>
        <p>₱499.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bay.jpg" alt="Dog Food"> 
        <h3>Bayong</h3>
        <p>₱70.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="eggs.jpg" alt="Dog Food"> 
        <h3>Itlugan ng manok</h3>
        <p>₱120.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="woo.jpg" alt="Dog Food"> 
        <h3>Wood Cock Box</h3>
        <p>₱189.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="kar.jpg" alt="Dog Food"> 
        <h3>Plastic Cock Box Single</h3>
        <p>₱200.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="kar2.jpg" alt="Dog Food"> 
        <h3>Plastic Cock Box Double</h3>
        <p>₱300.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="cow.jpg" alt="Dog Food"> 
        <h3>Feeding Bottle for cow</h3>
        <p>₱159.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="lit.jpg" alt="Dog Food"> 
        <h3>Liter Box</h3>
        <p>₱190.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="triple.jpg" alt="Dog Food"> 
        <h3>Inuman ng sisiw / 45 days LARGE Size</h3>
        <p>₱70.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="bowl2.jpg" alt="Dog Food"> 
        <h3>Bowl for cat and dog</h3>
        <p>₱50.00</p>
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
        <img src="red2.jpg" alt="Dog Food"> 
        <h3>CHICKEN BOWL RED</h3>
        <p>₱90.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="plas.jpg" alt="Dog Food"> 
        <h3>PLASTIC BOWL</h3>
        <p>₱30.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="whi.jpg" alt="Dog Food"> 
        <h3>PLATSTIC BOX WHITE COLOR</h3>
        <p>₱99.00</p>
        <a href=""> 
            <button>Click here</button>
            </a>
        </div>
        <div class="product-card">
        <img src="blu.jpg" alt="Dog Food"> 
        <h3>PLASTIC BOX BLUE COLOR</h3>
        <p>₱85.00</p>
        <a href=""> 
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