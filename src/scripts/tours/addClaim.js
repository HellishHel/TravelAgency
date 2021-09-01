const table = document.querySelector('#mainTable');

table.addEventListener('afterRender', function(event) {
    if (isAuth) {
        const trNodes = table.querySelectorAll('tbody tr');

        for (let i = 0; i < trNodes.length; i++) {
            let td = document.createElement('td');
            let button = document.createElement('button');
            button.classList.add('claim-btn');
            button.classList.add('primaryBtn');
            button.innerHTML = 'Забронировать';
    
            td.appendChild(button);
    
            trNodes[i].appendChild(td);

            button.addEventListener('click', function() {
                const form = document.querySelector('.addClaim');
                let data = {
                    tour_id: event.data[i].id
                }

                let obj = {
                    tour_id: event.data[i].id,
                    price_tickets: event.data[i].price_tickets,
                    price_day: event.data[i].price_day,
                    period: event.data[i].period
                }

                fillSelectCtrl(data, function() {
                    calcForm(obj, function(data) {
                        form.querySelector('#buyTour').onclick = function(event) {
                            event.preventDefault();
                            const requestData = {
                                methodName: 'claim',
                                ...data,
                                ...config.additionFuelds
                            };
                        
                            fetch(config.apiPostFile, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json;charset=utf-8'
                                },
                                body: JSON.stringify(requestData)
                            })
                                .then(response => response.text())
                                .then(response => {
                                    form.style.display = 'none';

                                    let messageBlock = document.querySelector('#message-block');
                                    
                                    messageBlock.style.display = 'block';
                                    messageBlock.querySelector('button').onclick = function() {
                                        window.location.href = '/claim';
                                    }
                                })
                                .catch(console.error);
                        }
                    });
                });

                form.style.display = 'block';
            });
        }
    }
});
