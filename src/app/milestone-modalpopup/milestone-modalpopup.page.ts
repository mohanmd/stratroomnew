import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';

@Component({
  selector: 'app-milestone-modalpopup',
  templateUrl: './milestone-modalpopup.page.html',
  styleUrls: ['./milestone-modalpopup.page.scss'],
})
export class MilestoneModalpopupPage implements OnInit {
  @Input() milestonedata: string;
  @Input() milesdata: string;
  constructor(public modalControler: ModalController) { }

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
