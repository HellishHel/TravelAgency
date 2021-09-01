function calcForm(tourData, callback) {
    const form = document.querySelector('.addClaim');

    function calcCost(obj, callback) {
        let pt = +obj.price_tickets * (+obj.adults_count + +obj.children_count);
        let pd = (+obj.price_day * +obj.mult) * (+obj.adults_count + +obj.children_count * 0.6);

        let cost = pt + pd * +obj.period;
    
        let res_span = form.querySelector('h5[data-form-value=cost]').querySelector('span');
        let pt_span = form.querySelector('h6[data-form-value=price_tickets]').querySelector('span');
        let pd_span = form.querySelector('h6[data-form-value=price_day]').querySelector('span');

        pt_span.innerHTML = pt;
        pd_span.innerHTML = pd;
    
        res_span.innerHTML = cost;

        console.log(obj);

        if (typeof callback === 'function') {
            callback({
                ...obj,
                cost
            });
        }
    
        return cost;
    }
    
    let adultsInput = form.querySelector('input[name=adults_count]');
    let childrenInput = form.querySelector('input[name=children_count]');
    let typeSelect = form.querySelector('select[name=type_id]');

    let calcObj = {
        ...tourData,
        adults_count: adultsInput.value,
        children_count: childrenInput.value
    }

    async function getSelectData() {
        const requestData = {
            methodName: 'types',
            type_id: typeSelect.value
        };
    
        fetch(config.apiGetFile, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(requestData)
        })
            .then(response => response.json())
            .then(response => {
                if (response.length == 1) {
                    calcObj.tour_type_id = response[0].id;
                    calcObj.mult = response[0].mult;
                    calcCost(calcObj, callback);
                }
            })
            .catch(console.error)
    }

    getSelectData();
    
    typeSelect.onchange = getSelectData;

    let peopleInputsArr = [adultsInput, childrenInput];

    peopleInputsArr.forEach(input => {
        input.oninput = function() {
            calcObj[input.getAttribute('name')] = input.value;
            calcCost(calcObj, callback);
        }
    });

    calcCost(calcObj, callback);
}