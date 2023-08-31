window.addEventListener('load', function () {
    const hamburgerButton = document.getElementById('js-hamburger')
    const searchButton = document.getElementById('js-search-button')
    const searchDropdown = document.querySelector('.search')
    const searchInput = document.getElementById('search-input')
    const header = document.querySelector('header')
    const nav = document.getElementById('menu-primary-navigation');
    const navLists = document.querySelectorAll('header li')
    const primaryNav = document.querySelectorAll('nav > ul > li');
    const childLinks = document.querySelectorAll('header li > ul')
    const closeBanner = document.getElementById("close-button");
    const bannerWrapper = document.getElementById("banner-wrapper");
    // Covid banner close button
    if (bannerWrapper) {
        closeBanner.addEventListener("click", function () {
        bannerWrapper.style.height = 0;
      });
    }

    // Nav Clicks
    primaryNav.forEach(navItem => {
        // Initial Load - Add .text-blue to parent nav-item
        if (navItem.children[1] && navItem.children[1].children) {
            for (var i = 0; i < navItem.children[1].children.length; i++) {
                if (navItem.children[1].children[i].classList.contains('text-blue')) {
                    navItem.children[0].classList.add('text-blue');
                }
            }
        }
        // Click Events
        navItem.addEventListener("click", function (e) {
            searchInput.blur();
            revertButtonAnimation(searchButton);
            let anchorTag = this.children[0]
            let subMenu = this.children[1]            
            // bring user to page when click isn't a dropdown            
            if (
              e.target.innerHTML !== anchorTag.innerHTML ||
              e.target.parentElement.parentElement.classList[0] === "sub-menu"
            ) {
              return;
            }
            // closes nav if user re-clicks an already open nav item
            else if (e.target.classList.contains("active")) {
              console.log("active", anchorTag);
              e.preventDefault();
              anchorTag.classList.remove("active");
              subMenu.classList.remove("open");
              return;
              // removes all class from nav
            } else {
              console.log("3");
              removeClass(primaryNav, "active", 0);
              removeClass(primaryNav, "open", 1);
            }
            // add classes to clicked nav item
            if (subMenu) {
                e.preventDefault()
                searchDropdown.classList.remove('open') //close search
                anchorTag.classList.add('active')
                subMenu.classList.add('open')
            }
        })
    })

    // search Clicks
    searchButton.addEventListener("click", function() {
        searchInput.focus();
        removeClass(childLinks, "open");
        handleButtonAnimation(this)
        this.classList.toggle("open")
        console.log(nav)
        nav.classList.remove('open')
        hamburgerButton.classList.remove("open")
        searchDropdown.classList.toggle('open')
        revertButtonAnimation(hamburgerButton)
        console.log('search', searchDropdown);
    })

    //hamburger
    hamburgerButton.addEventListener("click", function () {
        searchInput.blur();
        removeClass(childLinks, "open");
        this.classList.toggle("open")
        handleButtonAnimation(this)
        console.log(nav)
        nav.classList.toggle('open')
        searchDropdown.classList.remove('open')
        searchButton.classList.remove("open")
        revertButtonAnimation(searchButton)
        console.log('working')
    })

    // Any click outside header resets header
    document.addEventListener("click", function (event) {
        var clickedHeader = header.contains(event.target);

        if (!clickedHeader) {
            searchInput.blur();
            revertButtonAnimation(searchButton)
            revertButtonAnimation(hamburgerButton)
            removeClass(childLinks, "open");
            removeClass(primaryNav, 'active', 0)
            searchDropdown.classList.remove('open')
            nav.classList.remove('open')
            hamburgerButton.classList.remove("open")
            searchButton.classList.remove("open")
        }
    });

    function removeClass(elementArray, className, childNumber) {
        if (childNumber !== undefined) {
            elementArray.forEach(element => {
                if (element.children[childNumber]) {
                    element.children[childNumber].classList.remove(className)
                }
            });
        }
        else {
            elementArray.forEach(element => {
                element.classList.remove(className)
            });
        }
    }

    // toggles icon animation
    function handleButtonAnimation(search) {
        search.children[0].children[0].classList.toggle('opacity-100')
        search.children[0].children[0].classList.toggle('transform')
        search.children[0].children[0].classList.toggle('rotate-45')

        search.children[0].children[1].classList.toggle('opacity-100')
        search.children[0].children[1].classList.toggle('transform')
        search.children[0].children[1].classList.toggle('-rotate-45')

        search.children[0].children[2].classList.toggle('hidden')
        search.children[0].children[3].classList.toggle('hidden')
    }

    // reverts icon animation
    function revertButtonAnimation(search) {
        search.children[0].children[0].classList.remove('opacity-100')
        search.children[0].children[0].classList.remove('transform')
        search.children[0].children[0].classList.remove('rotate-45')

        search.children[0].children[1].classList.remove('opacity-100')
        search.children[0].children[1].classList.remove('transform')
        search.children[0].children[1].classList.remove('-rotate-45')

        search.children[0].children[2].classList.remove('hidden')
        search.children[0].children[3].classList.remove('hidden')
    }

    // header { top:-1px; } - Allowing the header to instersect the top of the page
    new IntersectionObserver(
        ([e]) => e.target.classList.toggle('show-nav-icon', e.intersectionRatio < 1),
        { threshold: [1] }
    ).observe(header) //Observing header
    // Adds ".user-is-tabbing" to body otherwise hides focus ring
    function handleFirstTab(e) {
        if (e.keyCode === 9) {
            document.body.classList.add('user-is-tabbing');
            window.removeEventListener('keydown', handleFirstTab);
        }
    }
    window.addEventListener('keydown', handleFirstTab);

});