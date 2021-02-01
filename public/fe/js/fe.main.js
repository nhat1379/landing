function getPdw(type = 'districts', params = {}) {
    let url = window.location.origin + '/' + type;

    let idName, select;
    if (type === 'districts') {
        idName = 'maqh';
        select = '#district_id';
    } else {
        idName = 'xaid';
        select = '#ward_id';
    }

    $.ajax({
        url: url,
        method: 'get',
        data: params
    }).done(res => {
        if (res.status === 1) {

            let html = '';
            res.data.forEach((item) => {
                html += `<option value="${item[idName]}">${item.name}</option>`;
            });
            $(select).html(html);

        } else {
            $(select).html('');
            $(select).change();
        }

        if (type === 'districts') {
            getPdw('wards', {
                district_id: res.data[0][idName]
            })
        }
    }).fail(() => {
        alert('Không lấy đc dữ liệu!')
    })
}

$(document).on('change', '#province_id', function() {
    getPdw('districts', {
        province_id: $(this).val()
    })
});

$(document).on('change', '#district_id', function() {
    getPdw('wards', {
        district_id: $(this).val()
    })
});