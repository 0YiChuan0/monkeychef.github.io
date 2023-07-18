let food = '';
function add_orderfood(food) {
    switch (food) {
        case 'chicken':
            document.getElementById('chicken_number').value++;
            break;

        case 'sweetfood':
            document.getElementById('sweetfood_number').value++;
            break;

        case 'FrenchFries':
            document.getElementById('FrenchFries_number').value++;
            break;

        case 'bloodcake':
            document.getElementById('bloodcake_number').value++;
            break;

        case 'vegetable':
            document.getElementById('vegetable_number').value++;
            break;

        case 'mushroom':
            document.getElementById('mushroom_number').value++;
            break;

        default:
            break;
    }
}

function sub_orderfood(food) {
    switch (food) {
        case 'chicken':
            if (document.getElementById('chicken_number').value > 0) {
                document.getElementById('chicken_number').value--;
            }
            break;
        case 'sweetfood':
            if (document.getElementById('sweetfood_number').value > 0) {
                document.getElementById('sweetfood_number').value--;
            }
            break;

        case 'FrenchFries':
            if (document.getElementById('FrenchFries_number').value > 0) {
                document.getElementById('FrenchFries_number').value--;
            }
            break;

        case 'bloodcake':
            if (document.getElementById('bloodcake_number').value > 0) {
                document.getElementById('bloodcake_number').value--;
            }
            break;

        case 'vegetable':
            if (document.getElementById('vegetable_number').value > 0) {
                document.getElementById('vegetable_number').value--;
            }
            break;

        case 'mushroom':
            if (document.getElementById('mushroom_number').value > 0) {
                document.getElementById('mushroom_number').value--;
            }
            break;

        default:
            break;
    }

}