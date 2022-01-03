function listar() {
    $.ajax({
        url: uri + '',
        type: 'GET',
        //data: {},

    }).done((result) => {
        let item = result.data;
        let txt = '<tr>';
        for (let i = item.length - 1; i >= 0; i--) {
            txt += "<td scope='row'>" + item[i]['id'] + "</td>";
            txt += "<td scope='row'>" + item[i][''] + "</td>";
        }
    });
}