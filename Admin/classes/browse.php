<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . '/PLVIL/utility/DBConnection.php');
include $_SERVER['DOCUMENT_ROOT'].'/PLVIL/classes/book.php';

$dbConnection = new DBConnection();
$conn = $dbConnection->getConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link rel="stylesheet" href="css/browse.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-lg">
            <a href="index.html" class="navbar-brand">
                <span class="fw-bold text-light display-5">PLVIL</span>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="class-item">
                        <a href="index.html" class="fs-5 text-light fw-bold nav-link">Home</a>
                    </li>
                    <li class="class-item">
                        <a href="browse.html" class="ms-3 fs-5 text-light fw-bold nav-link active">Browse</a>
                    </li>
                    <li class="class-item">
                        <a href="AR/index.html" class="fs-5 text-light fw-bold nav-link">AR Scan</a>
                    </li>
                    <li class="class-item">
                        <a href="chairs-user.html" class="fs-5 text-light fw-bold nav-link">Chairs</a>
                    </li>
                    <li class="class-item">
                        <a href="about.html" class="fs-5 text-light fw-bold nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="book-nav">
        <div class="container-fluid">
            <div class="text-center">
                <h1 class="text-light display-3 fw-bold pb-4 pb-md-0">BOOKS</h1>
            </div>
        </div>
    </section>

    <section class="literature">
        <div class="container-fluid bg-light p-3">
            <div class="container">
                <div class="mt-3 text-light book-categories justify-content-center d-none d-lg-flex">
                    <button type="button" class="prev"><a href="#"><span class="material-symbols-rounded">chevron_left</span></a></button>
                    <ul class="nav nav-underline" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="category nav-link active" id="lit-tab-btn" data-bs-toggle="tab"
                                data-bs-target="#lit-tab-pane" type="button" role="tab" aria-controls="lit-tab-pane"
                                aria-selected="true" data-category="Literature">Literature</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="category nav-link" id="educ-tab-btn" data-bs-toggle="tab"
                                data-bs-target="#educ-tab-pane" type="button" role="tab" aria-controls="educ-tab-pane"
                                aria-selected="true" data-category="Education">Education</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="category nav-link" id="novel-tab-btn" data-bs-toggle="tab"
                                data-bs-target="#novel-tab-pane" type="button" role="tab" aria-controls="novel-tab-pane"
                                aria-selected="true" data-category="Novel">Novel</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="category nav-link" id="ent-tab-btn" data-bs-toggle="tab"
                                data-bs-target="#ent-tab-pane" type="button" role="tab" aria-controls="ent-tab-pane"
                                aria-selected="true" data-category="Entertainment">Entertainment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="category nav-link" id="tech-tab-btn" data-bs-toggle="tab"
                                data-bs-target="#tech-tab-pane" type="button" role="tab" aria-controls="tech-tab-pane"
                                aria-selected="true" data-category="Technology">Technology</button>
                        </li>
                        <li><a href="#" class="category">Engineering</a></li>
                        <li><a href="#" class="category">Laws</a></li>
                        <li><a href="#" class="category">Accountancy</a></li>
                        <li><a href="#" class="category">Architecture</a></li>
                        <li><a href="#" class="category">Fiction</a></li>
                    </ul>
                    <button type="button" class="next"><a href="#"><span class="material-symbols-rounded">chevron_right</span></a></button>
                </div>

                <div class="btn-group d-block d-lg-none p-3">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-bg-dark dropdown-toggle" data-bs-auto-close="inside" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <span class="fw-bold fs-5">Select Category</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" data-bs-toggle="tab" href="#lit-tab-pane"><span class="fw-bold fs-5">Literature</span></a></li>
                                <li><a class="dropdown-item" data-bs-toggle="tab" href="#educ-tab-pane"><span class="fw-bold fs-5">Education</span></a></li>
                                <li><a class="dropdown-item" data-bs-toggle="tab" href="#novel-tab-pane"><span class="fw-bold fs-5">Novel</span></a></li>
                                <li><a class="dropdown-item" data-bs-toggle="tab" href="#ent-tab-pane"><span class="fw-bold fs-5">Entertainment</span></a></li>
                                <li><a class="dropdown-item" data-bs-toggle="tab" href="#tech-tab-pane"><span class="fw-bold fs-5">Technology</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="lit-tab-pane" role="tabpanel" aria-labelledby="lit-tab" tabindex="0">
                        <div class="container">
                            <h1 class="fw-bold p-3">Literature</h1>
                            <div id="book-list-literature" class="row row-cols-3 row-cols-lg-5 g-3"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="educ-tab-pane" role="tabpanel" aria-labelledby="educ-tab" tabindex="0">
                        <div class="container">
                            <h1 class="fw-bold p-3">Education</h1>
                            <div id="book-list-education" class="row row-cols-3 row-cols-lg-5 g-3"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="novel-tab-pane" role="tabpanel" aria-labelledby="novel-tab" tabindex="0">
                        <div class="container">
                            <h1 class="fw-bold p-3">Novel</h1>
                            <div id="book-list-novel" class="row row-cols-3 row-cols-lg-5 g-3"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="ent-tab-pane" role="tabpanel" aria-labelledby="ent-tab" tabindex="0">
                        <div class="container">
                            <h1 class="fw-bold p-3">Entertainment</h1>
                            <div id="book-list-entertainment" class="row row-cols-3 row-cols-lg-5 g-3"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tech-tab-pane" role="tabpanel" aria-labelledby="tech-tab
                    " tabindex="0">
                        <div class="container">
                            <h1 class="fw-bold p-3">Technology</h1>
                            <div id="book-list-technology" class="row row-cols-3 row-cols-lg-5 g-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Automatically load the literature category on page load
            fetchBooksByCategory('Literature');
            const categories = document.querySelectorAll('.category');

            categories.forEach(category => {
                category.addEventListener('click', function () {
                    const categoryName = category.getAttribute('data-category');
                    fetchBooksByCategory(categoryName);
                });
            });

            function fetchBooksByCategory(category) {
                fetch('fetch_books.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ category })
                })
                    .then(response => response.json())
                    .then(data => {
                        displayBooks(data, category);
                    })
                    .catch(error => {
                        console.error('Error fetching books:', error);
                    });
            }

            function displayBooks(books, category) {
                const bookListId = `book-list-${category.toLowerCase()}`;
                const bookList = document.getElementById(bookListId);
                if (bookList) {
                    bookList.innerHTML = ''; // Clear previous books

                    books.forEach(book => {
                        const bookCard = `
                            <div class="col">
                                <div class="card p-1 text-center">
                                    <img src="./uploads/${book.image2}" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title pt-1 fw-bold fs-4">${book.Title}</div>
                                        <a href="bookloc.html" class="text-decoration-none stretched-link text-black fw-semibold">${book.Author}</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        bookList.innerHTML += bookCard;
                    });
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/browse.js"></script>

</body>

</html>
