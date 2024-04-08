function changeEstateType(type, button) {
    var input = document.createElement('estateType')
    input.value = type;
    var buttons = document.querySelectorAll('#estate_type button');
    buttons.forEach(function(btn) {
        btn.classList.remove('bg-blue-300');
    });

    // Добавляем стиль только к нажатой кнопке
    button.classList.add('bg-blue-300');
    console.log(input.value);
}