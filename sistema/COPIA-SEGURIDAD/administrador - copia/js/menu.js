// MENU
const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    cardBody = body.querySelector(".card-body"),
    // SWITCH
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

let thead = document.querySelector("thead");
let productos = document.querySelector(".btnProductosMenu");
let usuarios = document.querySelector(".btnUsuariosMenu");
let dashboard = document.querySelector(".btnDashboard");

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

// searchBtn.addEventListener("click" , () =>{
//     sidebar.classList.remove("close");
// })

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
    }

    if(body.classList.contains("dark")){

        localStorage.setItem('dark-mode', 'true');

    } else {
        localStorage.setItem('dark-mode', 'false');
    }
});

// OBTIENE MODO ACTUAL

if(localStorage.getItem('dark-mode') === 'true'){
    body.classList.add("dark");
} else{
    body.classList.remove("dark");
}

// CREACION DE VARIABLE EN LOCALSTORAGE

dashboard.addEventListener("click" , () =>{
    localStorage.setItem('Table-Dashboard', 'true');
    localStorage.setItem('Table-Productos', 'false');
    localStorage.setItem('Table-Usuarios', 'false');
});

productos.addEventListener("click" , () =>{
    localStorage.setItem('Table-Dashboard', 'false');
    localStorage.setItem('Table-Productos', 'true');
    localStorage.setItem('Table-Usuarios', 'false');
});

usuarios.addEventListener("click" , () =>{
    localStorage.setItem('Table-Dashboard', 'false');
    localStorage.setItem('Table-Productos', 'false');
    localStorage.setItem('Table-Usuarios', 'true');
});

// OBTENCION DE MODO ACTUAL

if(localStorage.getItem('Table-Dashboard') === 'true'){
    cargarContenido('home','index.php');
}
else if(localStorage.getItem('Table-Productos') === 'true'){
    cargarContenido('home','productos.php');
}
else if(localStorage.getItem('Table-Usuarios') === 'true'){
    cargarContenido('home','usuarios.php');
}