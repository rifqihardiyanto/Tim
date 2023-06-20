<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<header>
    <div class="navbar">
        <div class="logo"><a href="/">Nashir</a></div>
        <ul class="links">
            <li class="li-nav"><a class="a-nav" href="/">Home</a></li>
            <li class="li-nav"><a class="a-nav" href="/about">About</a></li>
            <li class="li-nav"><a class="a-nav" href="/produks">Products</a></li>
            <li class="li-nav"><a class="a-nav" href="/produk">Product</a></li>
            <li class="li-nav"><a class="a-nav" href="">Carreer</a></li>
            <!-- <li class="li-nav"><a class="a-nav" href="">Academy</a></li> -->
        </ul>
        <a href="" class="action_btn">Academy</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="dropdown_menu">
        <li class="li-nav"><a class="a-nav" href="/">Home</a></li>
        <li class="li-nav"><a class="a-nav" href="/about">About</a></li>
        <li class="li-nav"><a class="a-nav" href="/produks">Products</a></li>
        <li class="li-nav"><a class="a-nav" href="/produk">Product</a></li>
        <li class="li-nav"><a class="a-nav" href="">Carreer</a></li>
        <li class="li-nav"><a class="a-nav" href="">Academy</a></li>
    </div>
</header>

<script type="text/javascript">
    const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('toggle_btn i')
    const dropDownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        ?'fa-solid fa-xmark'
        :'fa-solid fa-bars'
    }
</script>