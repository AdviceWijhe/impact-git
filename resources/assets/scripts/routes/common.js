export default {
  init() {
    // JavaScript to be fired on all pages

    let searchButton = document.querySelector('.search i');
    let searchForm = document.querySelector('#searchform')

    searchButton.addEventListener('click', function() {
      if(searchForm.classList.contains('active')) {
        searchForm.classList.remove('active');
      }else {
        searchForm.classList.add('active');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
