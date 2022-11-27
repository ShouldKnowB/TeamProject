@extends('layouts.app')

<body>
    <section>
        <div class="about_us">
            <h1>About punch</h1>
            <div>
                <div class="ContentAb">
                    <div class="AbImage">
                        <img src="{{ url('assets/images/Final-no-bg.png') }}" alt="">

                    </div>
                    <article>
                        <p>
                            Punch is a hydration beverage company and here at Punch we aim to deliver only the
                            highest of quality thirst quenching
                            refreshment beverages, all while having 0 sugar included.
                            This includes different kinds of Drinks with a variety of different flavours.
                            The kinds of drinks that we offer are energy, hydration and 0 sugar options.
                            These all come in 5 unique flavours that all pack a punch.
                            Despite being sugar-free, they all maintain an authentic fruity flavour that is
                            refreshing
                            no matter the circumstances.
                        </p>
                        <div class="aboutUs-button">
                            <a href="{{url ('/store')}}">See options</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="WrapperAb">
            <div class="RowAb">
                <div class="AbImg2">
                    <img src="{{ url('assets/images/V3-no-bg.png') }}" alt="">
                </div>
                <div class="ContentAb2">
                    <h1>OUR STORY</h1>
                    <p>Punch was developed with the goal of achieving a functional hydration drink that caters to everyone's wants and needs. Whether it be energy, carbonated, or sugar-free drinks.
                        We worked endlessly to achieve this while still delivering the best tasting drinks possible. Punch was crafted with natural fruit juices that provide a refreshing authentic flavor,
                        leaving you wanting more with every sip. It also contains natural caffeine to give you that energy boost you may need for whatever the situation may be. If you are looking for a drink packed with fruity flavours
                        while providing the benefits of energy and refreshment then punch is the perfect pick for you. 
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
