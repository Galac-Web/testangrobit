// FormDataHandler.js
class FormDataHandler {
    constructor(formId, url) {
        this.form = document.getElementById(formId);
        this.url = url;
        this.data = {};
    }

    collectData() {
        const inputs = this.form.querySelectorAll('input');

        inputs.forEach(input => {
            this.data[input.name] = input.value;
        });
    }

    sendData() {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', this.url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                this.handleResponse(JSON.parse(xhr.responseText));
            }
        };

        xhr.send(JSON.stringify(this.data));
    }

    handleResponse(response) {
        console.log('Response:', response);
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

// Экспортируем класс
export default FormDataHandler;
