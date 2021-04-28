$('.bank-btn').click(function (e){
    e.preventDefault();
    let banknotes = $('input[name = "banknotes"]').val();
    let sum = $('input[name = "sum"]').val();

    $.ajax({
        url: '/post.php',
        type: 'POST',
        dataType: 'json',
        data: { banknotes: banknotes, sum: sum},
        success (data){

            if(data.status == true){

                const divAnswer = document.querySelector('.answer');

                divAnswer.innerHTML = '';

                divAnswer.classList.remove('none');

                const span = document.createElement('span');

                span.innerHTML = 'Ответ:';

                divAnswer.append(span);

                const table = document.createElement('table');

                const tr = document.createElement('tr');

                for (let i = 0; i < 2; i++) {

                    const td = document.createElement('td');

                    i == 0 ? td.innerHTML = 'Номинал' : td.innerHTML = 'Колличество';

                    tr.append(td);
                }

                table.append(tr);

                $.each(data[0], function (index, value){

                    let tr = document.createElement('tr');

                    for (let i = 0; i < 2; i++) {

                        const td = document.createElement('td');

                        i == 0 ? td.innerHTML = index : td.innerHTML = value;

                        tr.append(td);
                    }

                    table.append(tr);

                    divAnswer.append(table);
                })
            }else{

                const divAnswer = document.querySelector('.answer');

                divAnswer.innerHTML = '';

                divAnswer.classList.remove('none');

                const span = document.createElement('span');

                span.innerHTML = 'Ответ:';

                divAnswer.append(span);

                divAnswer.classList.remove('none');

                let div = document.createElement('div');

                div.classList.add('answer-error');

                div.innerHTML = `Неверная сумма. Выберите ${data[0]} или ${data[1]}`

                divAnswer.append(div);
            }
        }
    });
})
