@extends('base')

@section('title', 'Home - Joshua Edwards Tutoring')
@section('meta_description', 'Welcome to Joshua Edwards Tutoring! I specialise in personalised maths tutoring for KS3 to A-level students, with a proven track record of outstanding results. My aim is to support dedicated learners in achieving their academic goals and exceeding their expectations. Learn how personalised tutoring can help you.')

@section('content')
<section class="homepage">
    <h1 class="page-title">{{ $pageInfo['title'] }}</h1>
    <div>
        <h3 class="homepage__title">{{ $pageInfo['about_title'] }}</h3>
        {!! $pageInfo['about_copy'] !!}
    </div>
    <div>
        <h3 class="homepage__title">{{ $pageInfo['aim_title'] }}</h3>
        {!! $pageInfo['aim_copy'] !!}
    </div>
    <figure class="homepage__image">
        <img src="{{ asset('images/jpg/biopic.jpeg') }}" alt="profile picture" title="Joshua Edwards Tutoring" class="br">
    </figure>
    <div class="homepage__background">
        <h3 class="homepage__title">{{ $pageInfo['background_title'] }}</h3>
        <div>
            {!! $pageInfo['background_copy'] !!}
        </div>
    </div>
    <div class="homepage__approach">
        <h3 class="homepage__title">{{ $pageInfo['approach_title'] }}</h3>
        <div>
            {!! $pageInfo['approach_copy'] !!}
            <p>If interested please <a class="homepage__link" href="/contact">get in contact.</a></p>
        </div>
    </div>
    <!--you don't need the "data-step" attr, but can be useful for storing instructions for JS -->
    <div class="step homepage__approach" data-step="a">
        <h3 class="homepage__title">Dummy A</h3>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ad alias, quis quaerat magnam nemo suscipit provident eius vitae ut dolorem impedit sint? Quae cum mollitia ex quidem eaque magni sed, aliquam natus voluptatibus, saepe cumque at aperiam nulla non. Itaque deserunt culpa nihil assumenda doloremque ut harum recusandae tempora. Minus aliquid laudantium minima quod corrupti deleniti dolores pariatur saepe maiores iusto. Vel tempore assumenda eaque cupiditate, commodi repellendus porro, culpa vitae quod beatae aliquam nostrum alias blanditiis enim modi ratione nemo. Expedita accusamus voluptas esse beatae? Laborum ratione expedita, minima recusandae officia aliquam obcaecati sunt illum doloremque harum aut.
        </div>
        <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias accusantium adipisci atque, harum doloribus iusto quam placeat animi aperiam repudiandae, laborum vitae? Vel, quam optio consequuntur enim fugit doloremque sed a corrupti id! Est, perspiciatis rem! Impedit, tempore atque recusandae reiciendis, molestias dignissimos in, adipisci non provident quia nisi possimus odit soluta labore expedita magnam tenetur. Neque, iusto harum recusandae officiis veritatis vitae ex repellat perspiciatis et fugit quas soluta adipisci unde sapiente impedit voluptatem? Quas ipsa facilis, fugiat quam incidunt neque nam voluptatum maxime a exercitationem deleniti quaerat rem. Quaerat, qui unde excepturi incidunt corrupti doloribus consectetur explicabo labore?</div>
    </div>
    <div class="step homepage__approach" data-step="b">
        <h3 class="homepage__title">Dummy B</h3>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, nulla. Explicabo officiis incidunt enim autem illo ratione eos quis cum sed sapiente, iure veniam sint natus, nihil quibusdam accusantium officia magnam facilis, quia ipsa? Molestias soluta ad tempora, excepturi repudiandae quibusdam ab expedita nisi. Earum cumque accusantium in, esse odit tempora quam debitis. Hic, eum sed mollitia officia, doloribus quidem accusantium odit odio perspiciatis quasi cupiditate, cumque natus maxime neque fugit omnis ut consequatur impedit est saepe sapiente eveniet? Minima.
        </div>
        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim quia incidunt voluptatum doloremque harum velit quam nisi odit dolore voluptate repellendus, possimus corrupti neque laborum fuga sed qui maiores? Voluptatem quaerat atque nulla facere maiores obcaecati saepe cupiditate, magni iste enim ut asperiores repudiandae officia consequatur rem suscipit vero commodi quidem. Iusto laboriosam quo harum voluptatibus voluptate odio, laudantium, quia animi rem, repellendus quod neque. Ut incidunt exercitationem nam blanditiis natus unde earum. Nostrum natus fugiat quos temporibus modi repudiandae quas dignissimos vero voluptatem, quaerat, quisquam architecto nobis quis repellendus praesentium deserunt, sint incidunt deleniti illo necessitatibus sequi! Quasi, veritatis?</div>
    </div>
    <div class="step homepage__approach" data-step="c">
        <h3 class="homepage__title">Dummy C</h3>
        <div>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit veritatis at vero impedit, quia quae accusamus eveniet officia, repellendus excepturi fuga labore dolorum doloribus architecto? Veritatis fugiat explicabo, recusandae temporibus voluptate minus? Incidunt pariatur ex explicabo possimus vitae mollitia qui molestiae fugiat ad, temporibus unde eius rem officia sint tempora ducimus facere tempore maiores. Sit doloribus similique fuga maxime velit excepturi doloremque iure, minus corporis non eius consequuntur, commodi temporibus quos earum qui esse ratione?
        </div>
        <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, beatae ab. Corrupti tenetur dicta culpa possimus fugit ipsam repellendus consectetur, tempora molestias qui, voluptas ex laudantium natus aut dolor unde et pariatur molestiae voluptates mollitia dignissimos laborum odit ipsa. Quos iste explicabo deserunt laborum sint vitae ipsa, error architecto amet culpa soluta quidem aut iusto illo? Ipsa officia iste aspernatur laudantium cum id eum pariatur obcaecati sapiente commodi molestiae sit nam inventore nobis tenetur autem culpa facilis earum, error natus. Commodi, delectus. Quas amet dolorum illo perspiciatis atque aspernatur accusamus asperiores repellendus voluptates! Assumenda ex, quis iusto dolorem consectetur minima?</div>
    </div>
</section>
@endsection