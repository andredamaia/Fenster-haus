import Preload from 'preload-it'
import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger)

export default class Load {
    constructor(options){
        this.container = options.domElement

        this.preload = Preload()
        this.preloadProgress = document.querySelector('.preload span')

        this.randomY = gsap.utils.random(30, 60)
        this.randomDuration = gsap.utils.random(0.5, 1.5)
        this.randomStagger = gsap.utils.random(0.1, 0.4)

        this.load()
    }

    load() {
        this.preload.fetch([
            '../fenster-haus/public/images/favicon.png',
            '../fenster-haus/public/images/bg-sobre-nos.png',
            '../fenster-haus/public/images/banner-1.jpg',
            '../fenster-haus/public/images/banner-2.jpg',
            '../fenster-haus/public/images/banner-3.jpg',
        ]).then(() => {
            // Animation executed when loading finish
            const enterAnimantion = gsap.timeline({ delay: 1 })
        
            enterAnimantion.to('.preload', {
                duration: .5,
                autoAlpha: 0,
                ease: 'power3.inOut'
            })
            enterAnimantion.to('.preload span', {
                duration: .8,
                autoAlpha: 0,
                skewY: 6,
                y: -20,
                delay: -.8,
                ease: 'power3.inOut'
            })
        })
        
        this.preload.onprogress = event => {
            this.preloadProgress.textContent = event.progress + '%'
        }
    }
}