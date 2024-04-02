const $targetEl = document.getElementById('dropdownMenu');
const $triggerEl = document.getElementById('dropdownButton');
const options = {
    placement: 'bottom',
    triggerType: 'click',
    offsetSkidding: 0,
    offsetDistance: 10,
    delay: 300,
    ignoreClickOutsideClass: false,
    onHide: () => {
        console.log('dropdown has been hidden');

    },
    onShow: () => {
        console.log('dropdown has been shown');

    },
    onToggle: () => {
        console.log('dropdown has been toggled');
    },
};

const instanceOptions = {
    id: 'dropdownMenu',
    override: true
};

 
 