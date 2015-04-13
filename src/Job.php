<?php namespace JobBrander\Jobs\Client;

/**
 * @method Job addCompanies($value)
 * @method Job addLocations($value)
 * @method Job addIndustries($value)
 * @method Job addDates($value)
 * @method Job addSalaries($value)
 * @method Job addCodes($value)
 * @method Job getId($value)
 * @method Job getTitle($value)
 * @method Job getDescription($value)
 * @method Job getSource($value)
 * @method Job getUrl($value)
 * @method Job getQuery($value)
 * @method Job getType($value)
 * @method Job getCompanies($value)
 * @method Job getLocations($value)
 * @method Job getIndustries($value)
 * @method Job getDates($value)
 * @method Job getSalaries($value)
 * @method Job getCodes($value)
 * @method Job setId($value)
 * @method Job setTitle($value)
 * @method Job setDescription($value)
 * @method Job setSource($value)
 * @method Job setUrl($value)
 * @method Job setQuery($value)
 * @method Job setType($value)
 * @method Job setCompanies($value)
 * @method Job setLocations($value)
 * @method Job setIndustries($value)
 * @method Job setDates($value)
 * @method Job setSalaries($value)
 * @method Job setCodes($value)
 */
class Job
{
    use AttributeTrait;

    /**
     * Job Id
     *
     * @var string
     */
    protected $id;

    /**
     * Job Title
     *
     * @var string
     */
    protected $title;

    /**
     * Job Description
     *
     * @var string
     */
    protected $description;

    /**
     * Job Source
     *
     * @var string
     */
    protected $source;

    /**
     * Job Url
     *
     * @var string
     */
    protected $url;

    /**
     * Job Query
     *
     * @var string
     */
    protected $query;

    /**
     * Job Type
     *
     * @var string
     */
    protected $type;

    /**
     * Job Companies
     *
     * @var array
     */
    protected $companies = [];

    /**
     * Job Locations
     *
     * @var array
     */
    protected $locations = [];

    /**
     * Job Industries
     *
     * @var array
     */
    protected $industries =[];

    /**
     * Job Dates
     *
     * @var array
     */
    protected $dates = [];

    /**
     * Job Salaries
     *
     * @var array
     */
    protected $salaries = [];

    /**
     * Job Codes
     *
     * @var array
     */
    protected $codes = [];

    /**
     * Create new job
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        array_walk($attributes, function ($value, $key) {
            $this->{$key} = $value;
        });
    }
}
