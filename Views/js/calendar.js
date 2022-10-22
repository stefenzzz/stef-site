(function(){
    const days = document.querySelector('.calendar .days');
    const monthText = document.querySelector('.calendar .date h1');
    const yearText = document.querySelector('.calendar .date span');

    const now = new Date();
    const date = now.getDate();
    let month = now.getMonth();
    let year = now.getFullYear();
    
    function renderCalendarDays(){

        const lastDay = new Date(year,month + 1,0);
        const lastDayDate = lastDay.getDate();
        const lastDayIndex = lastDay.getDay();
        const thisMonth = new Date(year,month,1);
        monthText.innerHTML = thisMonth.toLocaleDateString('en-us',{month:"long"});
        yearText.innerHTML = thisMonth.toLocaleDateString('en-us',{year:"numeric"});

        const firstDayIndex = thisMonth.getDay();
        let prevMonthLast = new Date(year,month, 0 ).getDate(); 

        days.innerHTML = '';

        for(i= 1 ;i<=lastDayDate;i++){

            const daySquare = document.createElement('div');
            daySquare.classList.add('day');
            if(i === date && month === now.getMonth()){
                daySquare.classList.add('current-day');
            }
            daySquare.innerHTML = i;
            days.appendChild(daySquare);
        }

        for(i = firstDayIndex; i > 0;i--){
            const daySquare = document.createElement('div');
            daySquare.setAttribute('class','day prev');
            daySquare.innerHTML = prevMonthLast;
            prevMonthLast--;
            days.insertBefore(daySquare,days.firstChild);
        }

        for(i = lastDayIndex +2,j = 1 ; i <= 7 ;i++,j++)
        {
            const daySquare = document.createElement('div');
            daySquare.setAttribute('class','day prev');
            daySquare.innerHTML = j;
            days.appendChild(daySquare);
        }
    }
    renderCalendarDays();

    const left = document.querySelector('.fa-angle-left');
    const right = document.querySelector('.fa-angle-right');
    
    left.onclick = function(){
        if(month <= 0){
            month = 11;
            year--;
        }else{
            month--;
        }

        
        renderCalendarDays();
    }
    right.onclick = function(){
        if(month >=11){
            month = 0;
            year++;
        }else{
            month++;
        }
        renderCalendarDays();
    }

})();