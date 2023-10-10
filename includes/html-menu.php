<style>
    .sidebar {
        height: 98%;
        width: 200px;
        position: fixed;
        top: 50%; /* Center vertically */
    transform: translateY(-50%); /* Adjust position */
        background-color: #55a4cc;
        padding-top: 20px;
        transition: left 0.3s;
        border-top-right-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
    }

    .sidebar.open {
        left: 0;
    }

    .sidebar a {
        padding: 10px 15px;
        margin-bottom: 5px;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
        width: 150px !important;
        border-top-right-radius: 50px !important;
        border-bottom-right-radius: 50px !important;
    }

    .sidebar a:hover {
        background-color: hsl(200, 91%, 91%);
        color: black;
    }

    .sidebar .active {
        background-color: hsl(200, 91%, 91%);
        color: black;
    }

    #sidebarToggle {
        display: none;
        position: absolute;
        top: 50%;
        right: -30px;
        transform: translateY(-50%);
        z-index: 1;
        border-top-right-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        color: white;
        background-color: #55a4cc;
        border: none;
    }

    @media (max-width: 1764px) {
        .sidebar {
            left: -200px;
        }

        #sidebarToggle {
            display: block;
        }
    }

    .sidebar h2 {
        color: white;
        text-align: center;
    }
</style>

<div class="sidebar" id="mySidebar">
    <h2>HTML5</h2>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="?pr=pr1">Texty</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?pr=pr2">Médiá</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?pr=pr3">Formuláre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tabuľky</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Meta údaje</a>
        </li>
    </ul>

    <button id="sidebarToggle" class="btn btn-dark">
        <i class="fas fa-arrow-right"></i>
    </button>
</div>