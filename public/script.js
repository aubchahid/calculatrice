$(document).ready(function() {
    let display = $('#display');
    let current = '';

    $('button').click(function() {
        const value = $(this).data('val');

        if (value === 'C') {
            current = '';
            display.text('0');
            return;
        }

        if (value === '=') {
            const selectedOption = $('input[name="calcOption"]:checked').val();

            if (selectedOption === 'javascript') {
                try {
                    current = eval(current).toString();
                } catch {
                    current = 'Error';
                }
                display.text(current || '0');
            } else {
                $.ajax({
                    url: '/calcul',
                    method: 'POST',
                    data: { expression: current },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        current = response.result || 'Error';
                        display.text(current);
                    },
                    error: function() {
                        current = 'Error';
                        display.text(current);
                    }
                });
            }

            return;
        }

        if (current === '0' || current === 'Error') current = '';
        current += value;
        display.text(current || '0');
    });
});
