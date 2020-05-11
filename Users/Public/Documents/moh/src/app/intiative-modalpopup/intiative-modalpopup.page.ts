import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-intiative-modalpopup',
  templateUrl: './intiative-modalpopup.page.html',
  styleUrls: ['./intiative-modalpopup.page.scss'],
})
export class IntiativeModalpopupPage implements OnInit {

  constructor( private modalControler: ModalController )  { }

  ngOnInit() {
  }

  dismiss() {
    // using the injected ModalController this page
    // can "dismiss" itself and optionally pass back data
    this.modalControler.dismiss({
      'dismissed': true
    });
  }

}
