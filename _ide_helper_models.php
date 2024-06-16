<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $url
 * @property string $authorName
 * @property string $updated
 * @property string $term
 * @method static \Illuminate\Database\Eloquent\Builder|Feed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereAuthorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereUpdated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feed whereUrl($value)
 */
	class Feed extends \Eloquent {}
}

namespace App\Models{
/**
 *
 *
 * @property int $id
 * @property int $feed_id
 * @property string $rel
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereFeedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereRel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereValue($value)
 */
	class Link extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $soort
 * @property string|null $nummer
 * @property string|null $onderwerp
 * @property string|null $datumsoort
 * @property string|null $datum
 * @property string|null $aanvangstijd
 * @property string|null $eindtijd
 * @property string|null $locatie
 * @property int $besloten
 * @property string $status
 * @property string|null $vergaderJaar
 * @property string $kamer
 * @property string|null $noot
 * @property int|null $VRSnummer
 * @property string|null $SIDvoortouw
 * @property string|null $voortouwNaam
 * @property string|null $voortouwAfkorting
 * @property string|null $voortouwKorteNaam
 * @property string|null $voortouwCommissie_id
 * @property string|null $aanvraagDatum
 * @property string|null $datumVerzoekEersteVerlenging
 * @property string|null $datumMededelingEersteVerlenging
 * @property string|null $datumVerzoekTweedeVerlenging
 * @property string|null $datumMededelingTweedeVerlenging
 * @property string|null $vervaldatum
 * @property string $gewijzigdOp
 * @property string $ApiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereAanvangstijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereAanvraagDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereBesloten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatumMededelingEersteVerlenging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatumMededelingTweedeVerlenging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatumVerzoekEersteVerlenging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatumVerzoekTweedeVerlenging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereDatumsoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereEindtijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereKamer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereLocatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereNoot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereOnderwerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereSIDvoortouw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVRSnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVergaderJaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVervaldatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVoortouwAfkorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVoortouwCommissieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVoortouwKorteNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activiteit whereVoortouwNaam($value)
 */
	class Activiteit extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $activiteit_id
 * @property string|null $actorNaam
 * @property string|null $actorFractie
 * @property string|null $relatie
 * @property int|null $volgorde
 * @property string|null $functie
 * @property string|null $spreektijd
 * @property string|null $SIDactor
 * @property string $persoon_id
 * @property string $fractie_id
 * @property string $commissie_id
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereActiviteitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereActorFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereActorNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereCommissieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereFractieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor wherePersoonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereRelatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereSIDactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereSpreektijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiviteitActor whereVolgorde($value)
 */
	class ActiviteitActor extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $activiteit_id
 * @property string|null $nummer
 * @property string|null $onderwerp
 * @property string|null $aanvangstijd
 * @property string|null $eindtijd
 * @property int|null $volgorde
 * @property string|null $rubriek
 * @property string|null $noot
 * @property string|null $status
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereAanvangstijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereActiviteitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereEindtijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereNoot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereOnderwerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereRubriek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agendapunt whereVolgorde($value)
 */
	class Agendapunt extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $agendapunt_id
 * @property string|null $zaak_id
 * @property string|null $stemmingsSoort
 * @property string|null $besluitSoort
 * @property string|null $besluitTekst
 * @property string|null $opmerking
 * @property string|null $status
 * @property int|null $agendapuntZaakBesluitVolgorde
 * @property string|null $gewijzigdOp
 * @property string|null $apiGewijzigdOp
 * @property int|null $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereAgendapuntId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereAgendapuntZaakBesluitVolgorde($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereBesluitSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereBesluitTekst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereOpmerking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereStemmingsSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Besluit whereZaakId($value)
 */
	class Besluit extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property int $openData_id
 * @property string $soort
 * @property string $documentNummer
 * @property string $titel
 * @property string $onderwerp
 * @property string $datum
 * @property string $vergaderjaar
 * @property string $kamer
 * @property int $volgnummer
 * @property string $citeertitel
 * @property string $alias
 * @property string $datumRegistratie
 * @property string $datumOntvangst
 * @property int $aanhangselNummer
 * @property string $kenmerkAfzender
 * @property string $organisatie
 * @property string $contentType
 * @property string $contentLength
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereAanhangselNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereCiteertitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereContentLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereDatumOntvangst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereDatumRegistratie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereDocumentNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereKamer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereKenmerkAfzender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereOnderwerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereOrganisatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereTitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereVergaderjaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commissie whereVolgnummer($value)
 */
	class Commissie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissie_id
 * @property string|null $soort
 * @property string|null $waarde
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereCommissieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieContactInformatie whereWaarde($value)
 */
	class CommissieContactInformatie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissie_id
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereCommissieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetel whereVerwijderd($value)
 */
	class CommissieZetel extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissieZetel_id
 * @property string|null $persoon_id
 * @property string|null $functie
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereCommissieZetelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon wherePersoonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastPersoon whereVerwijderd($value)
 */
	class CommissieZetelVastPersoon extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissieZetel_id
 * @property string|null $fractie_id
 * @property string|null $functie
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereCommissieZetelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereFractieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVastVacature whereVerwijderd($value)
 */
	class CommissieZetelVastVacature extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissieZetel_id
 * @property string|null $persoon_id
 * @property string|null $functie
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereCommissieZetelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon wherePersoonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerPersoon whereVerwijderd($value)
 */
	class CommissieZetelVervangerPersoon extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $commissieZetel_id
 * @property string|null $fractie_id
 * @property string|null $functie
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature query()
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereCommissieZetelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereFractieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CommissieZetelVervangerVacature whereVerwijderd($value)
 */
	class CommissieZetelVervangerVacature extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property int $openData_id
 * @property string $soort
 * @property string $documentNummer
 * @property string $titel
 * @property string $onderwerp
 * @property string $datum
 * @property string $vergaderjaar
 * @property string $kamer
 * @property int $volgnummer
 * @property string $citeertitel
 * @property string $alias
 * @property string $datumRegistratie
 * @property string $datumOntvangst
 * @property int $aanhangselNummer
 * @property string $kenmerkAfzender
 * @property string $organisatie
 * @property string $contentType
 * @property string $contentLength
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAanhangselNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCiteertitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereContentLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDatumOntvangst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDatumRegistratie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereKamer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereKenmerkAfzender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereOnderwerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereOrganisatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereTitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereVergaderjaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereVolgnummer($value)
 */
	class Document extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $actorNaam
 * @property string|null $actorFractie
 * @property string|null $functie
 * @property string|null $relatie
 * @property string|null $sidActor
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereActorFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereActorNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereRelatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereSidActor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentActor whereVerwijderd($value)
 */
	class DocumentActor extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $status
 * @property int|null $versienummer
 * @property int|null $bestandsgrootte
 * @property string|null $extensie
 * @property string|null $datum
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereBestandsgrootte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereExtensie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereVersienummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentVersie whereVerwijderd($value)
 */
	class DocumentVersie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $afkorting
 * @property string|null $naamNl
 * @property string|null $naamEn
 * @property int|null $aantalZetels
 * @property int|null $aantalStemmen
 * @property string|null $datumActief
 * @property string|null $datumInactief
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereAantalStemmen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereAantalZetels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereAfkorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereDatumActief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereDatumInactief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereNaamEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereNaamNl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fractie whereVerwijderd($value)
 */
	class Fractie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel query()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetel whereVerwijderd($value)
 */
	class FractieZetel extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelPersoon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelPersoon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelPersoon query()
 */
	class FractieZetelPersoon extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $functie
 * @property string $van
 * @property string $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature query()
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FractieZetelVacature whereVerwijderd($value)
 */
	class FractieZetelVacature extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $titel
 * @property string|null $citeertitel
 * @property string|null $alias
 * @property int|null $nummer
 * @property string|null $toevoeging
 * @property int $hoogsteVolgnummer
 * @property int|null $afgesloten
 * @property string|null $kamer
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereAfgesloten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereCiteertitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereHoogsteVolgnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereKamer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereTitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereToevoeging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kamerstukdossier whereVerwijderd($value)
 */
	class Kamerstukdossier extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $nummer
 * @property string|null $titels
 * @property string|null $initialen
 * @property string|null $tussenvoegsel
 * @property string|null $achternaam
 * @property string|null $voornamen
 * @property string|null $roepnaam
 * @property string|null $geslacht
 * @property string|null $functie
 * @property string|null $geboortedatum
 * @property string|null $geboorteplaats
 * @property string|null $geboorteland
 * @property string|null $overlijdensdatum
 * @property string|null $overlijdensplaats
 * @property string|null $woonplaats
 * @property string|null $land
 * @property string|null $fractielabel
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereAchternaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereFractielabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereGeboortedatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereGeboorteland($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereGeboorteplaats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereGeslacht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereInitialen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereLand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereOverlijdensdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereOverlijdensplaats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereRoepnaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereTitels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereTussenvoegsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereVoornamen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persoon whereWoonplaats($value)
 */
	class Persoon extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $soort
 * @property string|null $waarde
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonContactinformatie whereWaarde($value)
 */
	class PersoonContactinformatie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $omschrijving
 * @property string $datum
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereOmschrijving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonGeschenk whereVerwijderd($value)
 */
	class PersoonGeschenk extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $functie
 * @property string|null $werkgever
 * @property string|null $omschrijvingNl
 * @property string|null $omschrijvingEn
 * @property string|null $plaats
 * @property string|null $van
 * @property string|null $totEnMet
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereOmschrijvingEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereOmschrijvingNl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan wherePlaats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonLoopbaan whereWerkgever($value)
 */
	class PersoonLoopbaan extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $omschrijving
 * @property int|null $isActief
 * @property string|null $periode
 * @property string|null $vergoeding
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereIsActief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereOmschrijving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie wherePeriode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereVergoeding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctie whereVerwijderd($value)
 */
	class PersoonNevenfunctie extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $jaar
 * @property string|null $bedragSoort
 * @property string|null $bedragVoorvoegsel
 * @property string|null $bedragValuta
 * @property string|null $bedrag
 * @property string|null $bedragAchtervoegsel
 * @property string|null $frequentie
 * @property string|null $frequentieBeschrijving
 * @property string|null $opmerking
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereBedrag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereBedragAchtervoegsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereBedragSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereBedragValuta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereBedragVoorvoegsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereFrequentie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereFrequentieBeschrijving($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereJaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereOpmerking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonNevenfunctieInkomsten whereVerwijderd($value)
 */
	class PersoonNevenfunctieInkomsten extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $opleidingNl
 * @property string|null $opleidingEn
 * @property string|null $instelling
 * @property string|null $plaats
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereInstelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereOpleidingEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereOpleidingNl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs wherePlaats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonOnderwijs whereVerwijderd($value)
 */
	class PersoonOnderwijs extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $doel
 * @property string|null $bestemming
 * @property string|null $van
 * @property string|null $totEnMet
 * @property string|null $betaaldDoor
 * @property int|null $gewicht
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereBestemming($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereBetaaldDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereDoel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereGewicht($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereTotEnMet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereVan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersoonReis whereVerwijderd($value)
 */
	class PersoonReis extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $nummer
 * @property string|null $statusCode
 * @property string|null $statusNaam
 * @property string|null $activiteitNummer
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereActiviteitNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereStatusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereStatusNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservering whereVerwijderd($value)
 */
	class Reservering extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $besluit_id
 * @property string $soort
 * @property string|null $fractie
 * @property int $fractieGrootte
 * @property string|null $actorNaam
 * @property string|null $actorFractie
 * @property string|null $persoon
 * @property int|null $vergissing
 * @property string|null $sidActorLid
 * @property string|null $sidActorFractie
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereActorFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereActorNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereBesluitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereFractieGrootte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming wherePersoon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereSidActorFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereSidActorLid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereVergissing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stemming whereVerwijderd($value)
 */
	class Stemming extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $toegezegdAanFractie
 * @property string|null $toegezegdAanPersoon
 * @property string|null $aanmaakdatum
 * @property string|null $nummer
 * @property string|null $activiteitNummer
 * @property string|null $naam
 * @property string|null $achternaam
 * @property string|null $initialen
 * @property string|null $tussenvoegsel
 * @property string|null $voornaam
 * @property string|null $achtervoegsel
 * @property string|null $titulatuur
 * @property string|null $functie
 * @property string|null $status
 * @property string|null $datumNakoming
 * @property string|null $kamerbriefNakoming
 * @property string|null $ministerie
 * @property string|null $tekst
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging query()
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereAanmaakdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereAchternaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereAchtervoegsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereActiviteitNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereDatumNakoming($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereInitialen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereKamerbriefNakoming($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereMinisterie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereTekst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereTitulatuur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereToegezegdAanFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereToegezegdAanPersoon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereTussenvoegsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toezegging whereVoornaam($value)
 */
	class Toezegging extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $soort
 * @property string|null $titel
 * @property string|null $zaal
 * @property string|null $vergaderjaar
 * @property int|null $vergaderingsNummer
 * @property string|null $datum
 * @property string|null $aanvangstijd
 * @property string|null $sluiting
 * @property string|null $kamer
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereAanvangstijd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereKamer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereSluiting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereTitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereVergaderingsNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereVergaderjaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereVerwijderd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vergadering whereZaal($value)
 */
	class Vergadering extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $soort
 * @property string|null $status
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Verslag whereVerwijderd($value)
 */
	class Verslag extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $agendapunt_id
 * @property string $nummer
 * @property string|null $soort
 * @property string $onderwerp
 * @property string|null $gestartOp
 * @property string|null $organisatie
 * @property string|null $titel
 * @property string|null $citeertitel
 * @property string|null $alias
 * @property string|null $grondslagvoorhang
 * @property string|null $termijn
 * @property int $vergaderjaar
 * @property int $volgnummer
 * @property string|null $status
 * @property string|null $huidigeBehandelstatus
 * @property int|null $afgedaan
 * @property int|null $grootProject
 * @property string|null $kabinetsappreciatie
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereAfgedaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereCiteertitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereGestartOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereGrondslagvoorhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereGrootProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereHuidigeBehandelstatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereKabinetsappreciatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereNummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereOnderwerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereOrganisatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereSoort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereTermijn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereTitel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereVergaderjaar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaak whereVerwijderd($value)
 */
	class Zaak extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string|null $actorNaam
 * @property string|null $actorFractie
 * @property string|null $actorAfkorting
 * @property string|null $functie
 * @property string|null $relatie
 * @property string|null $sidActor
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereActorAfkorting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereActorFractie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereActorNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereFunctie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereRelatie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereSidActor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZaakActor whereVerwijderd($value)
 */
	class ZaakActor extends \Eloquent {}
}

namespace App\Models\OpenData{
/**
 *
 *
 * @property int $id
 * @property string $openData_id
 * @property string $naam
 * @property int|null $sysCode
 * @property string $gewijzigdOp
 * @property string $apiGewijzigdOp
 * @property int $verwijderd
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereApiGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereGewijzigdOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereNaam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereOpenDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereSysCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zaal whereVerwijderd($value)
 */
	class Zaal extends \Eloquent {}
}

namespace App\Models{
/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

