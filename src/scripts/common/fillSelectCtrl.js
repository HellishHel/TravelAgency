function fillSelectCtrl(data, callback) {
    config.selects.forEach(function (select) {
        select.innerHTML = '';
        
        const sendData = {
            methodName: select.getAttribute('data-select'),
            functionName: select.getAttribute('data-function')
        };

        for (const key in data) {
            if (Object.hasOwnProperty.call(data, key)) {
                sendData[key] = data[key];
            }
        }
    
        fetch(config.apiGetFile, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(sendData)
        })
            .then(response => response.json())
            .then(function(data) {
                data.forEach(function (item) {
                    const textNode = document.createTextNode(item['name']);
                    const optionNode = document.createElement('option');
                    optionNode.value = item['id'];
    
                    optionNode.appendChild(textNode);
                    select.appendChild(optionNode);
                });

                if (typeof callback === 'function') {
                    callback();
                }
    
                return data;
            })
            .catch(error => console.error(error));
    });
}

fillSelectCtrl();