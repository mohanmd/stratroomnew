import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { InitiativeDetailPage } from './initiative-detail.page';

describe('InitiativeDetailPage', () => {
  let component: InitiativeDetailPage;
  let fixture: ComponentFixture<InitiativeDetailPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InitiativeDetailPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(InitiativeDetailPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
