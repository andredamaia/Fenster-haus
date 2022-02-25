import '../styles/index.scss'

import Load from './utils/load'
import Menu from './components/menu'

import './pages/home'
import './pages/sobre-nos'
import './pages/por-que-escolher-a-fenster'
import './pages/quem-somos'
import './pages/blog'
import './pages/blog-interna'
import './pages/fale-conosco'
import './pages/esquadrias'
import './pages/rodape'
import './pages/esquadrias-aluminio'
import './pages/portas-internas'
import './pages/pele-de-vidro'
import './pages/guarda-corpo'
import './pages/cases'

new Load({ domElement: document.querySelector('.preload') })
new Menu({ domElement: document.querySelector('.menu') })