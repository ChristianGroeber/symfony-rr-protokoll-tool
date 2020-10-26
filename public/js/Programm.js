function loadProgramm() {
    $.ajax({
        url: "/ajax/programm/load",
    })
}

class Event {
    constructor(id, verantwortlicherLeiter) {
        this.id = id;
        this.verantwortlicherLeiter = verantwortlicherLeiter;
    }
}

class Programm extends Event {
    constructor(id, verantwortlicherLeiter, date, programmPunkte) {
        super(id, verantwortlicherLeiter);
        this.programmPunkte = programmPunkte;
        this.date = date;
    }

    addProgrammPunkt(punkt) {
        this.programmPunkte.push(punkt);
        return this;
    }
}

class ProgrammPunkt extends Event {
    constructor(id, verantwortlicherLeiter, dateStart, dateEnd, leiter, programm, title, beschreibung = '') {
        super(id, verantwortlicherLeiter);
        this.leiter = leiter;
        this.programm = programm;
        this.dateStart = dateStart;
        this.dateEnd = dateEnd;
        this.beschreibung = beschreibung;
        this.title = title;
    }

    build() {
        let punktStr = '<div class="programmpunkt">' +
            '<span><h3>' + this.title + '</h3></span><span><p>' + this.dateStart.format('d.m.Y') + ' - ' + this.dateEnd.format('d.m.Y') + '</p></span>' +
            '</div>'
        return punktStr;
    }
}