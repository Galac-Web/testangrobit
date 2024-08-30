class FormDataHandler {
    constructor(formId, url) {
        this.form = document.getElementById(formId);
        this.url = url;
        this.data = {};
    }

    collectData() {
        // Сбор всех input, textarea и select элементов внутри формы
        const elements = this.form.querySelectorAll('input, textarea, select');
        if(elements){
            elements.forEach(element => {
                // Проверка типа элемента и вывод его в консоль для отладки
                console.log(`Collecting data from element: ${element.tagName}, name: ${element.name}, value: ${element.value}`);

                if (element.tagName === 'TEXTAREA') {
                    this.data[element.name] = element.value;
                } else if (element.type === 'checkbox' || element.type === 'radio') {
                    if (element.checked) {
                        this.data[element.name] = element.value;
                    }
                } else {
                    this.data[element.name] = element.value;
                }
            });
        }


        console.log(this.data); // Вывод данных для проверки
    }

    formatDataAsUrlEncoded() {
        console.log(this.data);
        const params = new URLSearchParams();
        for (const [key, value] of Object.entries(this.data)) {
            params.append(key, value);
        }
        return params.toString();
    }

    sendData() {
        const xhr = new XMLHttpRequest();
        xhr.open('post', this.url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                this.handleResponse(JSON.parse(xhr.responseText));
            }
        };

        const urlEncodedData = this.formatDataAsUrlEncoded();

        xhr.send(urlEncodedData);
    }

    handleResponse(response) {
        console.log(response);
        if (response.success) {
            alert('Data submitted successfully!');
        } else {
            alert('An error occurred: ' + response.message);
        }
    }

    submitForm() {
        this.collectData();
        this.sendData();
    }
}

document.addEventListener('DOMContentLoaded', function() {


if(document.getElementById('submit-button')){
    document.getElementById('submit-button').addEventListener('click', () => {
        const formHandler = new FormDataHandler('user-set-information', '/runquery');
        formHandler.submitForm();
    });

}







});