<div class="search--wrap flex justify-end items-center ml-auto  text-right ">
    <!--<button
            title="Start searching"
            type="button"
            class="flex md:hidden bg-gray-100 hover:bg-blue-100 justify-center items-center border border-gray-500 rounded-full focus:outline-none h-10 px-3"
            onclick="searchInput.toggle()"
    >
        <img src="<?php echo e(mix('/img/magnifying-glass.svg', 'assets/build')); ?>" alt="search icon" class="h-4 w-4 max-w-none">
    </button>

    <div id="js-search-input" class="docsearch-input__wrapper hidden md:block">
        <div id="search_results" class="docsearch-input__holder hidden"></div>
        <label for="search" class="hidden">Search</label>

        <input
                id="docsearch-input"
                class="docsearch-input relative block h-10 transition-fast  outline-none text-gray-700 border  ml-auto px-4 pb-0"
                name="docsearch"
                type="text"
                placeholder="Search"
        >

        <button
                class="md:hidden absolute pin-t pin-r h-full font-light text-3xl text-blue-500 hover:text-blue-600 focus:outline-none -mt-px pr-7"
                onclick="searchInput.toggle()"
        >&times;
        </button>
    </div> -->

    <div class="sf-input-container sf-input-container--1 sf-input-search-container">
        <div class="sf-input sf-input--1" id="input_search">
            <div class="flex">
                <i class="sf-icon">search</i>
            </div>
            <label class="sf-input-inner-label">
                <input type="email" required="" class="sf-input-main" placeholder="Search" >
            </label>
            <div class="sf-input-body--right flex flex-center items-cross-center">
                <button class="sf-input-close" style = "display: none;">✕</button>
            </div>
        </div>
        <div id="search_results" class="docsearch-input__holder hidden"></div>
    </div>
</div>

<script>
    class SearchClass{
        constructor(){
            this.search = document.querySelector("#input_search");
            this.menu = document.querySelector(".sf-menu");
        }
        searchGetter(){
            return this.search;
        }
        menuGetter(){
            return this.menu;
        }
        toggleSearch(){
            console.log("You clicked search!");
            //const menu = document.querySelector(".sf-menu");
            this.menu.style.display = "none";
            this.search.parentElement.classList.add('flex-grow'); 
        }
        searchDocumentClick(){
            if (!this.search.contains(event.target)) {
                console.log(event.target);
                /// The click was OUTSIDE the specifiedElement, do something
                console.log("You clicked outside of search!");
            }
        }
    }
    const searchObject = new SearchClass();

    searchObject.searchGetter().addEventListener("click", function(){
        searchObject.toggleSearch();
    }); 

    searchObject.searchGetter().querySelector('input').addEventListener('input', function() {
        if (this.value.trim() !== '') {
            searchObject.searchGetter().querySelector('.sf-input-close').style.display = 'flex';
        } else {
            searchObject.searchGetter().querySelector('.sf-input-close').style.display = 'none';
        }
    });

    searchObject.searchGetter().querySelector('.sf-input-close').addEventListener('click', function() {
        searchObject.searchGetter().querySelector('input').value = '';
        searchObject.searchGetter().querySelector('input').dispatchEvent(new Event("input", { bubbles: true }));
    });

    document.addEventListener('click', event => {
            const isClickInside = searchObject.searchGetter().contains(event.target);
            
            if (!isClickInside) {
                searchObject.menuGetter().style.display = "inline-flex";
                searchObject.search.parentElement.classList.remove('flex-grow'); 
            }
        });
    
    
</script>

<?php /**PATH C:\Users\Mike\Documents\Михаил\work\SimaiWork\SF5\new_documentation\ui-doc-template\source/_core/_nav/search-input.blade.php ENDPATH**/ ?>