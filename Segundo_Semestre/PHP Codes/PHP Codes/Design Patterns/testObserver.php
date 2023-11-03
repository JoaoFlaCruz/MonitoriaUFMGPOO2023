<?php
    include_once('../global.php');
    $subject = new concreteSubject();

    $barGraph = new concreteObserver( "Bar Graph");
    $pieGraph = new concreteObserver( "Pie Graph" );

    $subject->attach( $barGraph );
    $subject->attach( $pieGraph );

    for ( $i=0; $i<100; $i++ ) {
        $subject->setState( $i );
        sleep(1);
        if ( $i == 10 ) {
            $tribarGraph = new concreteObserver( "Tridimensional Graph");
            $subject->attach( $tribarGraph );
        }
    }