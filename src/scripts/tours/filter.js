table.addEventListener('afterRender', function(event) {
    // console.log('dataPromise', dataPromise);

    dataPromise
        .then(result => {
            if (result.length > 0) {
                function filter(arr, filter_property, direction) {
                    let seen = [];

                    for (let i = 0; i < arr.length; i++) {
                        let isEl = true;

                        for (var j = 0; j < seen.length; j++) {
                            if (arr[i][filter_property] === seen[j][filter_property]) {
                                isEl = false;
                                break;
                            }
                        }

                        if (isEl) {
                            seen.push(arr[i]);
                        }
                    }

                    seen = seen.sort(function(first, second) {
                        if (direction === 'asc') {
                            return first[filter_property] - second[filter_property];
                        } else if (direction === 'desc') {
                            return second[filter_property] - first[filter_property];
                        } else {
                            return;
                        }
                    });

                    return seen;
                }

                const filtersWrap = document.querySelector('.filters-wrap');
                let filters = filtersWrap.querySelectorAll('.filter');

                filters.forEach(filterBtn => {
                    filterBtn.onclick = async function(event) {
                        config.filterData = null;

                        let filterType = filterBtn.getAttribute('data-f-type');
                        let filterValue = filterBtn.getAttribute('data-f-value');

                        let icon = filterBtn.querySelector('i');

                        switch (filterValue) {
                            case 'asc': 
                                filterValue = 'desc';
                                break;
                            case 'desc': 
                                filterValue = '';
                                break;
                            case '': 
                                filterValue = 'asc';
                                break;
                        }

                        filters.forEach(btn => {
                            btn.setAttribute('data-f-value', '');
                            btn.querySelector('i').removeAttribute('class');
                        });

                        filterBtn.setAttribute('data-f-value', filterValue);

                        switch (filterValue) {
                            case 'asc':
                                icon.classList.add('fas');
                                icon.classList.add('fa-sort-up');
                                break;
                            case 'desc':
                                icon.classList.add('fas');
                                icon.classList.add('fa-sort-down');
                                break;
                            case '': 
                                icon.removeAttribute('class');
                                break;
                        }

                        if (filterType == 'price_min_num') {
                            config.filterData = filter(result, 'price_min_num', filterValue);
                        } else if (filterType == 'period') {
                            config.filterData = filter(result, 'period', filterValue);
                        }

                        renderTable(config.filterData, config.searchInput.value);
                    }
                });

            }
        })
});
