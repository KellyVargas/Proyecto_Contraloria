let url = window.location.pathname,
    form = $('#form'),
    formButton = $('#formButton');
    routes = {
        store: {
            url : url,
            method : 'POST'
        },
    };

function ajaxRequest(url, method, data, callback) {
    $.ajax({
        url: url,
        data: data,
        dataType: 'json',
        method: method,
        processData: false,
        contentType: false,
        success: function (results) {
        },
        error: function (results) {
            console.log(results);
            alert('error')
        },
        fail: function (results) {
            console.log(results);
            alert('fail')
        },
        complete: function (results) {
        },
    });
}

function createRow(results) {
    alert('success');
    console.log(results);
}

formButton.on("click", function(){
    let action = formButton.attr('data-action');
    let data = new FormData(form[0]);
    if (action === 'store'){
            ajaxRequest (routes['store'].url, routes['store'].method, data, createRow);
    }
});

