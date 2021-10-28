Vue.component('PRJ-slide', {

    template:
    `
    <div class="item" style="background-image:url(images/Slider/skills.jpg)">
    <div class="carousel-caption container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <h1>My Skills</h1>
                <p>I have acquired many skills over the years, click below for more info!</p>
                <div class="col-md-8 col-md-8">
                    <a class="btn-Menu" href="/Skills">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
`

data(){
    return {
        images:[
            {slide: 1, img:'images/Slider/skills.jpg'},
            {slide: 2, img:'images/Slider/projects.jpg'},
            {slide: 3, img:'images/Slider/contact2.jpg'}
        ]
    };
}
});


new Vue({
    el: 'vueRoot'
});