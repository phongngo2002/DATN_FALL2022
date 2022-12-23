@extends('layouts.admin.main')

@section('content')

    @include('custom.wheel_luck')
    <script>
        const historyWheelLuck = document.getElementById('historyWheelLuck');
        const number_ticket = document.getElementById('number_ticket');
        const currentMoney = document.querySelectorAll('.current_money');
        const number_ticket_buy = document.getElementById('number_ticket_buy');
        const btnBuyTicket = document.getElementById('btnBuyTicket');
        const tableRender = document.getElementById('tableRender');
        const paginateHistory = document.getElementById('paginateHistory');
        if (+number_ticket.innerText === 0) {
            document.querySelector('.wheel__button').setAttribute('disabled', 'true');
        }
        document.getElementById('number_ticket_buy').addEventListener('keyup', (e) => {
            if (e.target.value < 0 && e.target.value) {
                document.getElementById('btnBuyTicket').setAttribute('disabled', 'true');
                const fee = 0;
                document.getElementById('fee').innerText = fee.toString();
                document.querySelector('.messageBuyTicket').innerHTML = '<span class="text-danger">Số vé mua phải lớn hơn 0</span>';

            }
            if (e.target.value > 0 && e.target.value * 30 <= Number(document.querySelector('.current_money1').dataset.money)) {
                const fee = e.target.value * 30;
                document.getElementById('fee').innerText = fee.toString();
                document.querySelector('.messageBuyTicket').innerHTML = '';

                document.getElementById('btnBuyTicket').removeAttribute('disabled');
            }
            if (e.target.value && e.target.value * 30 > Number(document.querySelector('.current_money1').dataset.money)) {
                const fee = e.target.value * 30;
                document.getElementById('fee').innerText = fee.toString();
                document.querySelector('.messageBuyTicket').innerHTML = '<span class="text-danger">Bạn không đủ xu để thực hiện giao dịch này</span>';

                document.getElementById('btnBuyTicket').setAttribute('disabled', 'true');
            }
            if (!e.target.value) {
                document.getElementById('btnBuyTicket').setAttribute('disabled', 'true');
                document.querySelector('.messageBuyTicket').innerHTML = '<span class="text-danger">Số vé mua bắt buộc nhập</span>';

                const fee = 0;
                document.getElementById('fee').innerText = fee.toString();
            }
        })

        function callAPi(gift) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('post_wheel_luck') }}",
                data: {
                    gift: gift,
                    user_id: {{\Illuminate\Support\Facades\Auth::id()}}
                },
                type: 'POST',
                dataType: 'json',
                success: function (result) {
                    const icon = '<i class="fa-brands fa-bitcoin text-warning"></i>';
                    const data = JSON.parse(JSON.stringify(result));
                    number_ticket.innerText = Number(number_ticket.innerText) - 1;
                    if (+number_ticket.innerText === 0) {
                        document.querySelector('.wheel__button').setAttribute('disabled', 'true');
                    }
                    currentMoney.forEach((item) => {
                        item.innerText = Number(item.innerText) + Number(data.history.gift);
                    })
                    historyWheelLuck.innerHTML = `
                    <tr class="trHistory">
                    <td>${document.querySelectorAll('.trHistory').length + 1}</td>
                    <td>${data.history.gift > 0 ? '<span class="text-success">+' + data.history.gift + icon + '</span>' : 'Chúc may mắn'}</td>
                        <td>${data.history.time}</td>
                        </tr>
                            ` + historyWheelLuck.innerHTML;
                    document.querySelectorAll('.trHistory').forEach((item, index) => {
                        const td = item.querySelector('td');
                        td.innerText = index + 1;
                    })


                }
            });
        }
    </script>
    <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>

@endsection
