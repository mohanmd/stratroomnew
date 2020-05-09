import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';

@Component({
  selector: 'app-subinit-modalpopup',
  templateUrl: './subinit-modalpopup.page.html',
  styleUrls: ['./subinit-modalpopup.page.scss'],
})
export class SubinitModalpopupPage implements OnInit {

  @Input() data: string;
  @Input() data1: string;


  constructor(public modalControler: ModalController) {
  }

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
