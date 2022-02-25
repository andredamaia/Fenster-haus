import Scroll from '../utils/scroll'
import Inputmask from 'inputmask'
// import swal from 'sweetalert';

const pageurl = document.querySelector('body').id


if(pageurl == 'fale-conosco'){
    const scroll = new Scroll()

    Inputmask({"mask": "(99) 99999-9999"}).mask('#phone')

    // swal("Mensagem enviada");
}