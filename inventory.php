<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" href="/asset/favicon.ico" type="image/x-icon">
  <title>MovaflexFurnitures</title>
  <style>
    .navbar {
      width: 100%;
      height: 200px;
    }

    .content-layout {
      display: flex;
      gap: 68px;
    }

    .sidebar {
      width: 460px;
      height: auto;
      background-color: #ffffff;
      color: white;
      padding: 10px;
      border-radius: 8px;
    }

    .card-container {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-content: flex-start;
      gap: 50px;
      flex-direction: column;
    }

    .card-container .cards-wrapper {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 50px;
    }

    .card-container .cards-wrapper .product-link {
      width: 322px;
    }

    .card {
      width: 288.97px;
      height: 369.37px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 16px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-weight: bold;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 16px rgba(62, 61, 61, 0.2);
    }

    @media (max-width: 1366px) {
      .content-layout {
        flex-direction: column;
        align-items: center;
      }

      .card-container {
        justify-content: center;
      }
    }

    .sidebar ul {
      padding: 20px;
      border-bottom: 5px solid #ffffff;
      border-radius: 8px;
    }

    .sidebar ul li {
      padding-top: 20px;
      display: flex;
      align-content: center;
      justify-content: flex-start;
    }

    .sidebar ul li input {
      width: 30%;
      box-sizing: border-box;
    }

    .hidden-card {
      display: none !important;
    }
  </style>
</head>

<body>

  <div class="movaflex-product">
    <div class="logo">
      <img src="asset/MOVAFLEX2.png" alt="MOVAFLEX Image" width="300">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>
          <a href="#">Product</a>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <div class="content-layout">
    <!-- Search and Filter UI -->
    <div class="sidebar">
      <ul>
        <h4>Filter By:</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="sofa"> Sofa</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="table"> Table</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="office chair"> Office Chair</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="chair"> Chair</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="cabinet"> Cabinet</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="work station"> Work Station</li>
      </ul>
      <ul>
        <h4>Brand</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="kokuyo"> K-1</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="lamex"> L-1</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="bevco"> B-1</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="alpha"> A-1</li>

      </ul>
      <ul>
        <h4>Surface Material</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="fabric"> Fabric</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="metal"> Metal</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="wood"> Wood</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="steel"> Steel</li>
      </ul>
    </div>

    <!-- Cards -->
    <div class="card-container">
      <input type="search" id="searchBox" style="background-color: #ffffff; width: 90%; height: 50px;"
        placeholder="Search:">

      <div class="cards-wrapper">
        <!-- Your product <a class="product-link"><div class="card">...</div></a> elements go here -->

        <a href="lamex-page/sure.html" class="product-link">
          <div class="card" data-filter="chair, sofa" data-brand="lamex" data-material="leather">
            <div class="product">
              <img src="inventory_picture/4 - Sure High Chair_MD17.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="lamex-page/astrid.html" class="product-link">
          <div class="card" data-filter="chair, sofa" data-brand="lamex" data-material="fabric">
            <div class="product">
              <img src="inventory_picture/2 - Astrid Café_CSE37_0.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="lamex-page/same.html" class="product-link">
          <div class="card" data-filter="sofa, chair" data-brand="lamex" data-material="fabric">
            <div class="product">
              <img src="inventory_picture/1 - Astrid Club Chair _MD15.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/fourseater.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/gang-chair-updated.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/eos.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/EOS-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/foro.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/FORO-GREEN-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/foro+.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/W125T-Black-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/jr-x-chair.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/junior-executive-chair-updated-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/k318a.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/k318a-updated-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/kade.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/KADE-RED-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/kade+.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/KADE-FGRAY-1-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/kas.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/KAS-FBLACK-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/kas+.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/KAS-FBLACK-1-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/lune.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/LUNE-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/senior-exe.html" class="product-link">
          <div class="card" data-filter="office chair,chair" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/senior-executive-chair-300x300.png" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/tablecorner.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/lineup01-1.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/tablesquare.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/lineup02-1.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/tablecircular.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/lineup03-1.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/tableangular.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/lineup18-1.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/confest.html" class="product-link">
          <div class="card" data-filter="table, office table" data-brand="kokuyo" data-material="steel, wood">
            <div class="product">
              <img src="inventory_picture/confest-640x480.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/leafline.html" class="product-link">
          <div class="card" data-filter="table, office table" data-brand="kokuyo" data-material="steel, wood">
            <div class="product">
              <img src="inventory_picture/Leafline-product-range1.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/calm.html" class="product-link">
          <div class="card" data-filter="table, office table" data-brand="kokuyo" data-material="steel, wood">
            <div class="product">
              <img src="inventory_picture/THUMBNAIL-01.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/saiba.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/product-listing-feature-image_saibi-2-640x480.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/zante.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/product-listing-feature-image_-23-640x480.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/sequence.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/main-Product-listing-image-640x480.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/workfit.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/Y6_01_232_CA_1101.jpg" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/bsm2.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/Feature-image-main.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/uptis.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/main-product-listing-feature-image_-2-640x480.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/wiste.html" class="product-link">
          <div class="card" data-filter="table, work station" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/wiste.png" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/clericalchair.html" class="product-link">
          <div class="card" data-filter="office chair" data-brand="alpha" data-material="fabric">
            <div class="product">
              <img src="inventory_picture/clerical-chair-with-arm-rest.png" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/jigen2.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="wood, steel">
            <div class="product">
              <img src="inventory_picture/SingleStraight.png" alt="Product Image" style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/personaltable.html" class="product-link">
          <div class="card" data-filter="table" data-brand="kokuyo" data-material="steel, wood">
            <div class="product">
              <img src="inventory_picture/6.1-Personal-Desk-Flat-Type-Black-Leg-150x150 (1).png" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="kokuyo-page/taskchairing.html" class="product-link">
          <div class="card" data-filter="task chair" data-brand="kokuyo" data-material="steel">
            <div class="product">
              <img src="inventory_picture/Feaure-image_2-640x480.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/scmm18.html" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMM18-BEIGE.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/scmm2.html" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMM2-GRAY2-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="alpha-page/scmm6" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMM6-LGRAY.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMMF-LGRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMMS-BEIGE-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OACD4-BEIGE-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OACD6-GRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OACD8-LGRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC3520-FHL-BEIGE-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC3540-FHL-GRAY-1-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC5520-FHL-LGRAY-1-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC5540-FHL-BEIGE-1-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>
        
        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC6920-FHL-GRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/OASC6940-FHL-LGRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCMLF-BEIGE-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCSP-GRAY-300x300.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <a href="contact.php" class="product-link">
          <div class="card" data-filter="cabinet" data-brand="alpha" data-material="steel">
            <div class="product">
              <img src="inventory_picture/SCWC-GRAY.jpg" alt="Product Image"
                style="width: 300px; height:auto;">
            </div>
          </div>
        </a>

        <!-- End card -->
      </div>

      <span id="pageInfo" style="margin: 0 10px;"></span>
      <div class="pagination-controls" style="margin-top: 20px; text-align: center; display:flex;">
        <button id="prevPage"><</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button id="nextPage">></button>
      </div>

    </div>

  </div>

  </div>
  <footer>
    <ul>
      <h1>Our Product</h1>
      <li><a href="#">Office Chair</a></li>
      <li><a href="#">Table</a></li>
      <li><a href="#">Office/Table</a></li>
    </ul>
    <ul>
      <h1>Menu Link</h1>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul>
      <h1>Contact Us</h1>
      <li><a href="#"><i class="fa-solid fa-location-dot"></i> 136 Calbayog St. Brgy. Highway Hills
          Mandaluyong City</a></li>
      <li><a href="#"><i class="fa-solid fa-envelope"></i> sales@movaflex.com</a></li>
      <li><a href="#"><i class="fa-solid fa-phone"></i> Tel. No. : (02) 8633 7526 ; 8532 5882</a></li>
      <li><a href="#"><i class="fa-solid fa-box"></i> Movaflex</a></li>
    </ul>
  </footer>
</body>
<script>
  const checkboxes = document.querySelectorAll('.filter-checkbox');
  const searchBox = document.getElementById('searchBox');
  const productLinks = document.querySelectorAll('.cards-wrapper .product-link');
  const prevButton = document.getElementById('prevPage');
  const nextButton = document.getElementById('nextPage');
  const pageInfo = document.getElementById('pageInfo');
  let currentPage = 1;
  const cardsPerPage = 12;

  function applyFilters() {
    const filterValues = [];
    const brandValues = [];
    const materialValues = [];
    const searchText = searchBox.value.toLowerCase();

    // Collect selected filter values
    checkboxes.forEach(cb => {
      if (cb.checked) {
        const type = cb.getAttribute('data-type');
        const value = cb.value.toLowerCase();
        if (type === 'filter') filterValues.push(value);
        else if (type === 'brand') brandValues.push(value);
        else if (type === 'material') materialValues.push(value);
      }
    });

    // Loop through all cards
    productLinks.forEach(link => {
      const card = link.querySelector('.card');

      // ✅ Your inserted parsing logic
      const filters = (card.getAttribute('data-filter') || '')
        .toLowerCase()
        .split(',')
        .map(f => f.trim());

      const brands = (card.getAttribute('data-brand') || '')
        .toLowerCase()
        .split(',')
        .map(b => b.trim());

      const materials = (card.getAttribute('data-material') || '')
        .toLowerCase()
        .split(',')
        .map(m => m.trim());

      const name = card.querySelector('h3')?.innerText.toLowerCase() || '';

      const matchFilter = filterValues.length === 0 || filterValues.some(val => filters.includes(val));
      const matchBrand = brandValues.length === 0 || brandValues.some(val => brands.includes(val));
      const matchMaterial = materialValues.length === 0 || materialValues.some(val => materials.includes(val));
      const matchSearch = name.includes(searchText);

      if (matchFilter && matchBrand && matchMaterial && matchSearch) {
        link.classList.remove('hidden-card');
      } else {
        link.classList.add('hidden-card');
      }
    });
  }

  function getVisibleCards() {
    return Array.from(productLinks).filter(link => !link.classList.contains('hidden-card'));
  }

  function showPage(page) {
    const visible = getVisibleCards();
    const totalPages = Math.ceil(visible.length / cardsPerPage);

    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;

    visible.forEach((link, i) => {
      link.style.display = (i >= (page - 1) * cardsPerPage && i < page * cardsPerPage) ? 'block' : 'none';
    });

    pageInfo.textContent = `Page ${page} of ${totalPages || 1}`;
    prevButton.disabled = page === 1;
    nextButton.disabled = page === totalPages;

    currentPage = page;
  }

  function applyFiltersAndPaginate() {
    applyFilters();
    showPage(1);
  }

  // Event listeners
  checkboxes.forEach(cb => cb.addEventListener('change', applyFiltersAndPaginate));
  searchBox.addEventListener('input', applyFiltersAndPaginate);
  prevButton.addEventListener('click', () => showPage(currentPage - 1));
  nextButton.addEventListener('click', () => showPage(currentPage + 1));

  // Initial load
  window.addEventListener('DOMContentLoaded', () => {
    applyFiltersAndPaginate();
  });
</script>


</html>