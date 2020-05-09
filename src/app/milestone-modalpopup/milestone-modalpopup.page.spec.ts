import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { MilestoneModalpopupPage } from './milestone-modalpopup.page';

describe('MilestoneModalpopupPage', () => {
  let component: MilestoneModalpopupPage;
  let fixture: ComponentFixture<MilestoneModalpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MilestoneModalpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(MilestoneModalpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
