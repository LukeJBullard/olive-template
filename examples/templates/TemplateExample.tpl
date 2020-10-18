<h1>{pageTitle}</h1>
Animals List:
<ul>
  {LOOP:animals}
    <li>{name}</li>
  {ENDLOOP}
</ul>
<br />
{IF:skyIsBlue}
  The Sky is Blue!
{ELSE}
  The Sky is NOT Blue!
{ENDIF}