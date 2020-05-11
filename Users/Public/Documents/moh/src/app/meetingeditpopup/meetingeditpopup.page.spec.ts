import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MeetingeditpopupPage } from './meetingeditpopup.page';

describe('MeetingeditpopupPage', () => {
  let component: MeetingeditpopupPage;
  let fixture: ComponentFixture<MeetingeditpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MeetingeditpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MeetingeditpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
